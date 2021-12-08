<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $biodata_Siswa= \App\Models\Siswa::all();
        return view('Siswa.index',['biodata_Siswa'=>$biodata_Siswa]);
    }

    public function create(Request $request)
    {
        \App\Models\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses',"Data Berhasil Disimpan"); 
    }
    public function edit($id)
    {
        $siswa=\App\Models\Siswa::find($id);
        return view('siswa/edit',['siswa'=>$siswa]);
    }
    public function update(Request $request,$id)
    {
        $siswa=\App\Models\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('siswa')->with('sukses',"Data Berhasil Diupdate");
    }
    public function delete($id)
    {
        $siswa=\App\Models\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses',"Data Berhasil Dihapus");
    }
}
