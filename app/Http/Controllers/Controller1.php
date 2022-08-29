<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartus = kartu::all();
        return view('kartu.index', compact('kartus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangku = barang::all();
        return view('barang.tambah', compact('barangku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'namabarang' => 'required',
            'stokawal' => 'required',
            'hargabarang' => 'required',
            'barangkeluar' => 'required',
            'stokakhir' => 'required',
        ]);

        $barang = barang::create([
            'namabarang' => $request->namabarang,
            'stokawal' => $request->stokawal,
            'hargabarang' => $request->hargabarang,
            'barangkeluar' => $request->barangkeluar,
            'stokakhir' => $request->stokakhir,
        ]);

        return redirect()->route('barangsip.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangku = barang::where('id', $id)->first();
        return view('barang.detail', compact('barangku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangku = barang::where('id', $id)->first();
        return view('barang.edit', compact('barangku'));
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
        $this->validate($request, [
            'namabarang' => 'required',
            'stokawal' => 'required',
            'hargabarang' => 'required',
            'barangkeluar' => 'required',
            'stokakhir' => 'required',
        ]);

        $barang = barang::where('id', $id);
        $barang->update($request->except('_token','_method'));
        return redirect()->route('barangsip.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = barang::where('id', $id);
        $barang->delete();
        return redirect()->route('barangsip.index');
    }
}
