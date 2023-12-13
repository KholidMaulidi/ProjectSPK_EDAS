<?php

namespace App\Http\Controllers;

use App\Models\DecisionMatrix;
use App\Models\Alternatif;

use Illuminate\Http\Request;
use SebastianBergmann\Type\VoidType;

class hasilController extends Controller
{
    //
    private $nspController;
    private $nsnController;

    public function __construct(NSPController $nspController, NSNController $nsnController)
    {
        $this->nspController = $nspController;
        $this->nsnController = $nsnController;
    }

    public function index()

    {
        $asTable = $this->asTable();
        $averageTable = $this->getAverageTable();
        return view('hasil', compact('averageTable', 'asTable'));
    }

    public function getAverageTable()
    {
        $uniqueKriteriaIds = DecisionMatrix::distinct('id_kriteria')->pluck('id_kriteria')->toArray();
        $averageTable = [];

        foreach ($uniqueKriteriaIds as $idKriteria) {
            $kriteriaValues = DecisionMatrix::where('id_kriteria', $idKriteria)->pluck('value')->toArray();

            $total = array_sum($kriteriaValues);
            $count = count($kriteriaValues);

            $averageValue = $count > 0 ? $total / $count : 0;

            // Simpan nilai rata-rata ke dalam array
            $averageTable[$idKriteria] = $averageValue;
        }

        return $averageTable;
    }

    public function asTable()
    {
        // Ambil nilai NSP dari controller NSP
        $nspValues = $this->nspController->index()->getData()['nspValues'];

        // Ambil nilai NSN dari controller NSN
        $nsnValues = $this->nsnController->index()->getData()['nsnValues'];

        // Inisialisasi array untuk menyimpan nilai AS untuk setiap alternatif
        $asValues = [];

        // Loop untuk menghitung nilai AS untuk setiap alternatif
        foreach ($nspValues as $idAlternatif => $nspValue) {
            // Ambil nilai NSN untuk id_alternatif yang sama
            $nsnValue = $nsnValues[$idAlternatif] ?? 0;

            // Hitung nilai AS
            $asValue = 0.5 * ($nspValue + $nsnValue);

            // Simpan nilai AS ke dalam array
            $asValues[$idAlternatif] = $asValue;
        }

        // Urutkan nilai AS dari yang terbesar ke yang terkecil
        arsort($asValues);

        // Hitung peringkat
        $ranking = array_keys($asValues);

        // Ambil nama alternatif untuk header tabel
        $alternatifNames = Alternatif::pluck('nama_alternatif', 'id')->toArray();

        // Kirim data ke view
        $data = [
            'asValues' => $asValues,
            'alternatifNames' => $alternatifNames,
            'ranking' => $ranking
        ];

        return view('hasil', $data);
    }
}
