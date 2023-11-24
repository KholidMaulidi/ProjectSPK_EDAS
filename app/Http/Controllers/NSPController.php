<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SPController;
use App\Models\Kriteria;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class NSPController extends Controller
{
    private $SPController;

    public function __construct(SPController $SPController)
    {
        $this->SPController = $SPController;
    }

    public function index()
    {
        // Ambil view dari controller SP
    $spView = $this->SPController->index();

    // Jika tidak ada data SP, kembalikan ke view dengan pesan
    // if ($spView->getData()['spValues']->isEmpty()) {
    //     return view('Edas.indexNSP')->with('error', 'Tidak ada data SP yang tersedia.');
    // }

    // Ambil nilai SP dari data yang dikirimkan ke view
    $spValues = $spView->getData()['spValues'];

    // Ambil nilai maksimum dari semua nilai SP
    $maxSPValue = max($spValues);

    // Inisialisasi array untuk menyimpan nilai NSP untuk setiap alternatif
    $nspValues = [];

    // Loop untuk menghitung nilai NSP untuk setiap alternatif
    foreach ($spValues as $idAlternatif => $spValue) {
        // Hitung nilai NSP
        $nspValue = $spValue / $maxSPValue;

        // Simpan nilai NSP ke dalam array
        $nspValues[$idAlternatif] = $nspValue;
    }

    // Ambil nama alternatif untuk header tabel
    $alternatifNames = Alternatif::pluck('nama_alternatif', 'id')->toArray();

    // Kirim data ke view
    return view('Edas.indexNSP', compact('nspValues', 'alternatifNames'));
    }
}
