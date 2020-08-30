<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        return view('siswa.index');
    }

    public function proses_simpan(Request $request){
        // dump($request);
        //validasi
        $validateData = $request->validate(
            [
            'nis'           => 'required|size:10',
            'nama_siswa'    => 'required|min:3|max:60',
            'tempat_lahir'  => 'required',
            'tgl_lahir'     => 'required',
            'jurusan'       => 'required',
            'nomor_hp'      => 'required',
            ],[
                'nis.required'               => 'NIS Wajib di isi dan Harus 10 Karakter',
                'nama_siswa.required'        => 'Nama Siswa Wajib di isi',
                'tempat_lahir.required'      => 'Tempat Lahir Siswa Wajib diisi',
                'tgl_lahir.required'         => 'Tanggal Lahir Siswa Wajib diisi',
                'jurusan.required'           => 'Jurusan Wajib diisi',
                'nomor_hp.required'          => 'Nomor Hp Wajib diisi',
            ]
    );
        // dump ($validateData);
        // //cek data
        // echo $request->nis; echo "<br>";
        // echo $request->nama_siswa; echo "<br>";
        // echo $request->alamat; echo "<br>";
        // echo $request->tempat_lahir;
        // echo $request->tanggal_lahir; echo "<br>";
        // echo $request->jurusan; echo "<br>";
        // echo $request->nomor_hp; echo "<br>";
    }
}
