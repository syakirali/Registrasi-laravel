<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftar;
use App\Prodi;

class RegistrasiController extends Controller
{
    public function tampil() {
        $pendaftar = Pendaftar::get()->all();
        // echo "<pre>";
        // foreach ($pendaftar as $p) {
        //   // code...
        //   print_r($p->prodi1()->nama);
        //   echo "<br>";
        // }
        // echo "</pre>";
        // dd($pendaftar[0]->prodi1()->get()->first());
        return view('tampil', ['pendaftar' => $pendaftar]);
    }

    public function form(){
        $s1 = Prodi::where('jenjang', 'S1')->orderBy('nama')->get()->all();
        $d4 = Prodi::where('jenjang', 'D4')->orderBy('nama')->get()->all();
        $d3 = Prodi::where('jenjang', 'D3')->orderBy('nama')->get()->all();
        // dd($s1);
        return view('registrasi', ['s1' => $s1, 'd4' => $d4, 'd3' => $d3]);
    }

    public function daftar(Request $request){
        $validatedData = $request->validate([
            'nik' => 'required|numeric|unique:pendaftar',
            'nama' => 'required|max:255',
            'tempat_lahir' => 'required|max:50',
            'tanggal_lahir' => 'required|date',
            'asal_sekolah' => 'required|max:50',
            'jenis_kelamin' => 'required|max:1',
            'agama' => 'required|max:15',
            'no_seluler' => 'required|max:15',
            'tlp_rumah' => 'required|max:15',
            'email' => 'required|max:50',
            'alamat' => 'required|max:100',
            'pil1' => 'required|numeric',
            'pil2' => 'required|numeric',
            'pil3' => 'required|numeric',
        ]);
        $pendaftar = new Pendaftar;
        $pendaftar->nik = $request->nik;
        $pendaftar->nama = $request->nama;
        $pendaftar->tempat_lahir = $request->tempat_lahir;
        $pendaftar->tanggal_lahir = $request->tanggal_lahir;
        $pendaftar->asal_sekolah = $request->asal_sekolah;
        $pendaftar->jenis_kelamin = $request->jenis_kelamin;
        $pendaftar->agama = $request->agama;
        $pendaftar->no_seluler = $request->no_seluler;
        $pendaftar->tlp_rumah = $request->tlp_rumah;
        $pendaftar->email = $request->email;
        $pendaftar->alamat = $request->alamat;
        $pendaftar->pilihan1 = $request->pil1;
        $pendaftar->pilihan2 = $request->pil2;
        $pendaftar->pilihan3 = $request->pil3;
        if ($pendaftar->save()) {
            return redirect()->route('daftar-form');
        }
        dd($request);
    }
}
