<?php

namespace App\Http\Controllers;
use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Support\Facades\DB;
use App\Models\DecisionMatrix;
use Illuminate\Http\Request;

class DecisionMatrixController extends Controller
{
    public function index()
    {
        // Ambil semua data DecisionMatrix dari database
        $decision_matrix = DecisionMatrix::all();

        // Jika tidak ada data, kembalikan ke view dengan pesan
        if ($decision_matrix->isEmpty()) {
            return view('Edas.indexDecisionMatrix')->with('error', 'Tidak ada data Decision Matrix yang tersimpan.');
        }

        // Buat array untuk menyimpan data yang akan ditampilkan di view
        $matrixTable = [];

        // Loop untuk menyusun data ke samping berdasarkan id_alternatif
        foreach ($decision_matrix as $data) {
            $matrixTable[$data->id_alternatif][$data->id_kriteria] = $data->value;
        }

        // Ambil nama kriteria untuk header tabel
        $kriteriaNames = DB::table('kriteria')->pluck('nama_kriteria', 'id')->toArray();

        // Kirim data ke view
        return view('Edas.indexDecisionMatrix', compact('matrixTable', 'kriteriaNames'));
    }
    public function createForm()
    {
        $alternatif = Alternatif::all();
        $kriteria = Kriteria::all();

        if ($alternatif->isEmpty()) {
            return redirect()->route('some.route')->with('error', 'Tidak ada alternatif yang ditemukan.');
        }

        return view('Edas.createDecisionMatrix', compact('alternatif', 'kriteria'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'value.*.*' => 'required|numeric', // Validasi untuk setiap nilai
        ]);

        try {
            foreach ($request->value as $id_alternatif => $alternatifValues) {
                foreach ($alternatifValues as $id_kriteria => $value) {
                    DecisionMatrix::create([
                        'id_kriteria' => $id_kriteria,
                        'id_alternatif' => $id_alternatif,
                        'value' => $value,
                    ]);
                }
            }

            return redirect()->route('decision_matrix.index')->with('success', 'Nilai Decision Matrix berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->route('decision_matrix.index')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
