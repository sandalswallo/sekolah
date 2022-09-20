<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;


class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate =$request->validate([
            'nama' => 'required|max:255'
        ]);
     $kelas = Kelas::create($request->all());
     
     return redirect('kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $Kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $Kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('kelas.form', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $Kelas
     * @returgn \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate =$request->validate([
            'nama' => 'required|max:255'
        ]);
        $kelas = Kelas::find($id);


     $kelas->update(['nama' => $request->nama
     ]);
     
     return redirect('kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $Kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        return redirect('kelas');
    }
}