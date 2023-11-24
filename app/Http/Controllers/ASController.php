<?php

namespace App\Http\Controllers;
use App\Http\Controllers\NSNController;
use App\Http\Controllers\NSPController;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class ASController extends Controller
{
    private $nspController;
    private $nsnController;

    public function __construct(NSPController $nspController, NSNController $nsnController)
    {
        $this->nspController = $nspController;
        $this->nsnController = $nsnController;
    }

    public function index()
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
            $asValue = 0.5*($nspValue + $nsnValue);

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
        return view('Edas.indexAS', compact('asValues', 'alternatifNames', 'ranking'));
    }
}
