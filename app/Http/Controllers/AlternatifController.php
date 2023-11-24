<?php

namespace App\Http\Controllers;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternatif = Alternatif::all();
        return view('Alternatif.index', ['Alternatif' => $alternatif]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alternatif = Alternatif::all();
        return view('Alternatif.create', ['Alternatif' => $alternatif]);
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
            'nama_alternatif' => 'required',
            ]);
            Alternatif::create($request->all());

            return redirect()->route('alternatif.index')->with('success', 'Kriteria Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alternatif = Alternatif::find($id);
        return view('Alternatif.show', compact('alternatif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alternatif = Alternatif::find($id);
        return view('Alternatif.edit', compact('alternatif'));
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
            'nama_alternatif' => 'required|string|max:255',
        ]);

        $alternatif = Alternatif::findOrFail($id);

        $alternatif->update([
            'nama_alternatif' => $request->nama_alternatif,

        ]);

        return redirect()->route('alternatif.index')->with('success', 'Alternatif berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alternatif::find($id)->delete();
        return redirect()->route('alternatif.index')->with('success', 'Alternatif Berhasil dihapus');
    }

    
}
