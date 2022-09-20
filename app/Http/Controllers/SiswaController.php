<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Kelas;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view ('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = Mapel::all();
        $kelas = Kelas::all();
      return view('siswa.add',compact('mapel', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validate = $request->validate([
       'nama'=> 'required|max:255',
       'jenis_kelamin'=> 'required|max:255',
       'alamat'=> 'required|max:255',
       'kelas_id' => 'required',
       'mapel_id' => 'required'   
        
        ]);

        $siswa = Siswa::create($request->all());
        return redirect ('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        $b = Siswa::find($id);
        return view('siswa.edit', compact('b','mapel','kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validate = $request->validate([
            'nama'=> 'required|max:255',
            'jenis_kelamin'=> 'required|max:255',
            'alamat'=> 'required|max:255',
            'kelas_id' => 'required',
            'mapel_id' => 'required'   
             
             ]);
     
             $siswa->update([
                'nama' => $request -> nama,
                'jenis_kelamin' => $request -> jenis_kelamin,
                'alamat' => $request -> alamat,
                'kelas_id' => $request -> kelas_id,
                'mapel_id' => $request -> mapel_id,
             ]);
             return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('siswa');
    }
}