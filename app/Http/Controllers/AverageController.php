<?php

namespace App\Http\Controllers;
use App\Models\DecisionMatrix;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class AverageController extends Controller
{
    public function index()
    {
        // Panggil metode untuk menghitung dan menyusun array nilai average
        $averageTable = $this->getAverageTable();
        $kriteriaNames = Kriteria::pluck('nama_kriteria', 'id')->toArray();
        return view('Edas.indexAverage', compact('averageTable', 'kriteriaNames'));
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
}
