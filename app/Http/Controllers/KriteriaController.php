<?php

namespace App\Http\Controllers;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria = Kriteria::all();
        return view('Kriteria.index', ['Kriteria' => $kriteria]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriteria = Kriteria::all();
        return view('Kriteria.create', ['Kriteria' => $kriteria]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kriteria' => 'required',
            'bobot_kriteria' => 'required',
            'jenis_kriteria' => 'required',
            ]);
            Kriteria::create($request->all());

            return redirect()->route('kriteria.index')->with('success', 'Kriteria Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kriteria = Kriteria::find($id);
        return view('Kriteria.show', compact('kriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kriteria = Kriteria::find($id);
        return view('Kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kriteria' => 'required|string|max:255',
            'bobot_kriteria' => 'required|numeric',
            'jenis_kriteria' => 'required|in:cost,benefit',
        ]);

        $kriteria = Kriteria::findOrFail($id);

        $kriteria->update([
            'nama_kriteria' => $request->nama_kriteria,
            'bobot_kriteria' => $request->bobot_kriteria,
            'jenis_kriteria' => $request->jenis_kriteria,
        ]);

        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kriteria::find($id)->delete();
        return redirect()->route('kriteria.index')->with('success', 'Kriteria Berhasil dihapus');
    }
}
