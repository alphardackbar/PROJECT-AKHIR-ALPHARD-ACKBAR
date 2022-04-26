<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
  public function index()
  {
    //mengambil data dari table pegawai
    $pegawais = DB::table("pegawais")->paginate(10);
    //mengirim data pegawai ke view index
    return view("index", ["pegawais" => $pegawais]);
  }
  public function cari(Request $request)
  {
    //menangkap data pencarian
    $cari = $request->cari;
    //mengambil data dari table pegawai sesuai pencarian data
    $pegawais = DB::table("pegawais")
      ->where("pegawai_nama", "like", "%" . $cari . "%")
      ->paginate();
    //mengirim data pegawai ke view index
    return view("index", ["pegawais" => $pegawais]);
  }
  //public function dat(/*$nama*///)
  //{
  //return $nama;
  //mengambil data dari table pegawai
  //  $pegawais = DB::table("pegawais")->get();

  //mengirim data pegawai ke view index
  //  return view("index", ["pegawais" => $pegawais]);
  //}


  public function tambah()
  {
    //memanggil view tambah
    return view("tambah");
  }
  //method untuk insert data ke table pegawai
  public function store(Request $request)
  {
    //insert data ke table pegawai
    DB::table("pegawais")->insert([
      "pegawai_nama" => $request->nama,
      "pegawai_jabatan" => $request->jabatan,
      "pegawai_umur" => $request->umur,
      "pegawai_alamat" => $request->alamat
    ]);
    //alihkan halaman ke halaman pegawai
    return redirect("/pegawai");
  }

  //method untuk edit data pegawai
  public function edit($id)
  {
    //mengambil data pegawai berdasarkan id yang di pilih
    $pegawais = DB::table("pegawais")->where("pegawai_id", $id)->get();
    //passing data pegawai yang di dapat ke view edit.blade.php
    return view("edit", ["pegawais" => $pegawais]);
  }

  //update data pegawai
  public function update(Request $request)
  {
    //update data pegawai
    DB::table("pegawais")->where("pegawai_id", $request->id)->update([
      "pegawai_nama" => $request->nama,
      "pegawai_jabatan" => $request->jabatan,
      "pegawai_umur" => $request->umur,
      "pegawai_alamat" => $request->alamat
    ]);
    //alihkan halaman ke halaman pegawai
    return redirect("/pegawai");
  }

  //method untuk hapus data pegawai
  public function hapus($id)
  {
    //update data pegawai
    DB::table("pegawais")->where("pegawai_id", $id)->delete();

    //alihkan halaman ke pegawai
    return redirect("/pegawai");
  }
}  

 

  /*public function formulir()
  {
    return view("formulir");
  }

  public function proses(Request $request)
  {
    $nama = $request->input("nama");
    $umur = $request->input("umur");
    $alamat = $request->input("alamat");
    return "NAMA :" . $nama .  "UMUR :" . $umur .  "ALAMAT :" . $alamat;
  }*/
