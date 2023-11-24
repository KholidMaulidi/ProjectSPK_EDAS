<?php

namespace App\Http\Controllers;
use App\Models\DecisionMatrix;
use App\Models\Kriteria;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class SNController extends Controller
{
    private $NDAController;

    public function __construct(NDAController $NDAController)
    {
        $this->NDAController = $NDAController;
    }
    public function index()
    {
        // Ambil semua data Decision Matrix
        $decisionMatrixData = DecisionMatrix::all();

        // Jika tidak ada data, kembalikan ke view dengan pesan
        if ($decisionMatrixData->isEmpty()) {
            return view('Edas.indexSN')->with('error', 'Tidak ada data Decision Matrix yang tersimpan.');
        }

        // Ambil semua kriteria
        $kriteriaIds = Kriteria::pluck('id')->toArray();

        // Ambil semua id_alternatif
        $alternatifIds = Alternatif::pluck('id')->toArray();

        // Inisialisasi array untuk menyimpan nilai SP untuk setiap alternatif
        $snValues = [];

        // Loop untuk menghitung total SP untuk setiap alternatif
        foreach ($alternatifIds as $idAlternatif) {
            // Inisialisasi total SP untuk setiap alternatif
            $totalSN = 0;

            // Loop untuk menghitung nilai SP dari setiap kriteria
            foreach ($kriteriaIds as $idKriteria) {
                // Ambil nilai Decision Matrix untuk id_alternatif dan id_kriteria tertentu
                $matrixValue = DecisionMatrix::where('id_alternatif', $idAlternatif)
                    ->where('id_kriteria', $idKriteria)
                    ->value('value');

                // Hitung nilai PDA dari fungsi calculatePDA
                $ndaValue = $this->NDAController->calculateNDA($matrixValue, $idKriteria);

                // Ambil bobot kriteria dari tabel Kriteria
                $bobot = Kriteria::where('id', $idKriteria)->value('bobot_kriteria');

                // Hitung nilai SP dan tambahkan ke totalSP
                $totalSN += $ndaValue * $bobot;
            }

            // Simpan totalSP ke dalam array
            $snValues[$idAlternatif] = $totalSN;
        }

        // Ambil nama alternatif untuk header tabel
        $alternatifNames = Alternatif::pluck('nama_alternatif', 'id')->toArray();

        // Kirim data ke view
        return view('Edas.indexSN', compact('snValues', 'alternatifNames'));
    }
}
