<?php

namespace App\Http\Controllers;
use App\Models\DecisionMatrix;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class PDAController extends Controller
{
    private $averageController;

    public function __construct(AverageController $averageController)
    {
        $this->averageController = $averageController;
    }

    public function index()
    {
        // Ambil semua data Decision Matrix
        $decisionMatrix = DecisionMatrix::all();

        // Jika tidak ada data, kembalikan ke view dengan pesan
        if ($decisionMatrix->isEmpty()) {
            return view('Edas.indexPda')->with('error', 'Tidak ada data Decision Matrix yang tersimpan.');
        }

        // Buat array untuk menyimpan data yang akan ditampilkan di view
        $pdaTable = [];

        // Loop untuk menyusun data ke samping berdasarkan id_alternatif
        foreach ($decisionMatrix as $data) {
            $pdaTable[$data->id_alternatif][$data->id_kriteria] = $this->calculatePDA($data->value, $data->id_kriteria);
        }

        // Ambil nilai rata-rata menggunakan fungsi di AverageController
        $averageTable = $this->averageController->getAverageTable();

        // Ambil nama kriteria untuk header tabel
        $kriteriaNames = Kriteria::pluck('nama_kriteria', 'id')->toArray();

        // Kirim data ke view
        return view('Edas.indexPda', compact('pdaTable', 'kriteriaNames'));
    }

    public function calculatePDA($nilai, $idKriteria)
    {
        // Ambil jenis kriteria dari tabel Kriteria
        $jenisKriteria = Kriteria::where('id', $idKriteria)->value('jenis_kriteria');

        // Ambil nilai rata-rata dari tabel averageTable
        $average = $this->averageController->getAverageTable()[$idKriteria];

        // Hitung PDA sesuai dengan jenis kriteria
        if ($jenisKriteria == 'benefit') {
            return max(0, ($nilai - $average) / $average);
        } elseif ($jenisKriteria == 'cost') {
            return max(0, ($average - $nilai) / $average);
        } else {
            // Handle other cases if needed
            return 0;
        }
    }
}
