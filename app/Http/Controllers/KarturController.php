<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kartu;

class KarturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartur = kartu::all();
        return view('kartu.index', compact('kartur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kartus = kartu::all();
        return view('kartu.create', compact('kartus'));
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
            'nomorkartu' => 'required',
            'nama'=> 'required',
            'alamat'=> 'required',
            'lahir'=> 'required',
            'nik'=> 'required',
            'fasilitas'=> 'required',
        ]);

        $kartu = kartu::create([
            'nomorkartu' => $request->nomorkartu,
            'nama'=> $request->nama,
            'alamat'=> $request->alamat,
            'lahir'=> $request->lahir,
            'nik'=> $request->nik,
            'fasilitas'=> $request->fasilitas,
        ]);

        return redirect()->route('kartusip.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kartur = kartu::oldest('id')->simplepaginate(1);
        return view('kartu.detail', compact('kartur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dashboard()
    {
        $kartur = kartu::count();
        return view('kartu.dashboard', compact('kartur'));
    }
}
