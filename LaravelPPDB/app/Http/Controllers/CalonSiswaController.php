<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calonsiswa;

class CalonSiswaController extends Controller
{
    public function siswa(){
        return "Tabel Data Calon Siswa";
    }
    public function create(){
        return view('form-pendaftaran');
    }

    public function show(){
        $calonmurid = Calonsiswa::all();
        return view('data-cpdb', ['cpdb'=>$calonmurid]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'noppdb' => 'required|size:10',
            'nama' => 'required|min:3|max:60',
            'asal_sekolah' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'alamat' => 'required',
            'nohp' => '',
        ]);
        dump($validateData);
        $calonsiswa = new Calonsiswa();
        $calonsiswa->noppdb= $validateData['noppdb'];
        $calonsiswa->nama = $validateData['nama'];
        $calonsiswa->asal_sekolah = $validateData['asal_sekolah'];
        $calonsiswa->pilihan1 = $validateData['pilihan1'];
        $calonsiswa->pilihan2 = $validateData['pilihan2'];
        $calonsiswa->alamat = $validateData['alamat'];
        $calonsiswa->nohp = $validateData['nohp'];
        $calonsiswa->save();

        return "Data Berhasil Di simpan Ke Database";
    }
    public function tampil($calonsiswa){
        $result = Calonsiswa::find($calonsiswa);
        return view('detail_calon', ['calonsiswa'=>$result]);
    }
}
