<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SNController;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class NSNController extends Controller
{
    private $SNController;

    public function __construct(SNController $SNController)
    {
        $this->SNController = $SNController;
    }

    public function index()
    {
        // Ambil view dari controller SP
    $snView = $this->SNController->index();

    // Jika tidak ada data SP, kembalikan ke view dengan pesan
    // if ($spView->getData()['spValues']->isEmpty()) {
    //     return view('Edas.indexNSP')->with('error', 'Tidak ada data SP yang tersedia.');
    // }

    // Ambil nilai SP dari data yang dikirimkan ke view
    $snValues = $snView->getData()['snValues'];

    // Ambil nilai maksimum dari semua nilai SP
    $maxSNValue = max($snValues);

    // Inisialisasi array untuk menyimpan nilai NSP untuk setiap alternatif
    $nsnValues = [];

    // Loop untuk menghitung nilai NSP untuk setiap alternatif
    foreach ($snValues as $idAlternatif => $snValue) {
        // Hitung nilai NSP
        $nsnValue = 1-($snValue / $maxSNValue);

        // Simpan nilai NSP ke dalam array
        $nsnValues[$idAlternatif] = $nsnValue;
    }

    // Ambil nama alternatif untuk header tabel
    $alternatifNames = Alternatif::pluck('nama_alternatif', 'id')->toArray();

    // Kirim data ke view
    return view('Edas.indexNSN', compact('nsnValues', 'alternatifNames'));
    }
}
