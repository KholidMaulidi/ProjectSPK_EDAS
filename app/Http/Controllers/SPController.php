<?php

namespace App\Http\Controllers;
use App\Models\DecisionMatrix;
use App\Models\Kriteria;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class SPController extends Controller
{
    private $PDAController;

    public function __construct(PDAController $PDAController)
    {
        $this->PDAController = $PDAController;
    }
    public function index()
    {
        // Ambil semua data Decision Matrix
        $decisionMatrixData = DecisionMatrix::all();

        // Jika tidak ada data, kembalikan ke view dengan pesan
        if ($decisionMatrixData->isEmpty()) {
            return view('Edas.indexSP')->with('error', 'Tidak ada data Decision Matrix yang tersimpan.');
        }

        // Ambil semua kriteria
        $kriteriaIds = Kriteria::pluck('id')->toArray();

        // Ambil semua id_alternatif
        $alternatifIds = Alternatif::pluck('id')->toArray();

        // Inisialisasi array untuk menyimpan nilai SP untuk setiap alternatif
        $spValues = [];

        // Loop untuk menghitung total SP untuk setiap alternatif
        foreach ($alternatifIds as $idAlternatif) {
            // Inisialisasi total SP untuk setiap alternatif
            $totalSP = 0;

            // Loop untuk menghitung nilai SP dari setiap kriteria
            foreach ($kriteriaIds as $idKriteria) {
                // Ambil nilai Decision Matrix untuk id_alternatif dan id_kriteria tertentu
                $matrixValue = DecisionMatrix::where('id_alternatif', $idAlternatif)
                    ->where('id_kriteria', $idKriteria)
                    ->value('value');

                // Hitung nilai PDA dari fungsi calculatePDA
                $pdaValue = $this->PDAController->calculatePDA($matrixValue, $idKriteria);

                // Ambil bobot kriteria dari tabel Kriteria
                $bobot = Kriteria::where('id', $idKriteria)->value('bobot_kriteria');

                // Hitung nilai SP dan tambahkan ke totalSP
                $totalSP += $pdaValue * $bobot;
            }

            // Simpan totalSP ke dalam array
            $spValues[$idAlternatif] = $totalSP;
        }

        // Ambil nama alternatif untuk header tabel
        $alternatifNames = Alternatif::pluck('nama_alternatif', 'id')->toArray();

        // Kirim data ke view
        return view('Edas.indexSP', compact('spValues', 'alternatifNames'));
    }



}
