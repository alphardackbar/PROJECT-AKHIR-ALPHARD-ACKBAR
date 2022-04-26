<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\opmom;
use App\Models\Jobside;
use App\Models\Meeting;
use App\Models\Tempat;
use App\Models\Pegawai;

class MomController extends Controller
{
    public function index()
    /*{
        return view("mom");
    }*/

    {
        //mengambil data dari table mom
        $moms = DB::table("moms")
            ->join("jobsides", "moms.mom_jobside", "=", "jobsides.jobside_id")
            ->join("meetings", "moms.mom_meeting", "=", "meetings.meeting_id")
            ->join("tempats", "moms.mom_tempat", "=", "tempats.tempat_id")
            ->join("pegawais as p1", "moms.mom_pemimpin", "=", "p1.pegawai_id")
            ->join("pegawais as p2", "moms.mom_notulen", "=", "p2.pegawai_id")
            ->select("moms.*", "jobsides.jobside_jobsidee", "meetings.meeting_meetingg", "tempats.tempat_tempat_vanue", "p1.pegawai_nama as nama_pemimpin", "p2.pegawai_nama as nama_notulen")
            ->paginate(10);
        //->dd();
        //mengirim data pegawai ke view index
        return view("mom", ["moms" => $moms]);
    }


    //method untuk hapus data mom
    public function hapus($id)
    {
        //update data mom
        DB::table("moms")->where("mom_id", $id)->delete();

        //alihkan halaman ke mom
        return redirect("/mom")->with("success", "Data Berhasil Di Hapus");
    }

    public function tambah()
    {
        //memanggil view tambah
        //return view("tambahh");

        //mengambil data dari table mom
        $opmoms = DB::table("opmoms")->paginate(10);
        //mengirim data pegawai ke view index
        return view("tambahh", [
            "opmoms" => $opmoms,
            "jobsides" => Jobside::all(),
            "meetings" => Meeting::all(),
            "tempats" => Tempat::all(),
            "pegawais" => Pegawai::all()
        ]);

        //$moms = DB::table("moms")->all();
        //return view("tambahh", compact(""));
    }
    //method untuk insert data ke table mom
    public function store(Request $request)
    {



        //insert data ke table mom
        DB::table("moms")->insert([
            "mom_no" => $request->no,
            "mom_jobside" => $request->jobside,
            "mom_meeting" => $request->meeting,
            "mom_jenis_meeting" => $request->jenis_meeting,
            "mom_tempat" => $request->tempat,
            "mom_link" => $request->link,
            "mom_tanggal_dan_waktu" => $request->tanggal_dan_waktu,
            "mom_waktu_mulai" => $request->waktu_mulai,
            "mom_waktu_selesai" => $request->waktu_selesai,
            "mom_pemimpin" => $request->pemimpin,
            "mom_notulen" => $request->notulen,
            "mom_snack" => $request->snack,
            "mom_agenda" => $request->agenda,
            "mom_notes" => $request->notes,
            "mom_peserta" => $request->peserta
        ]);
        //alihkan halaman ke halaman mom
        return redirect("/mom")->with("success", "Data Berhasil Di Tambah");
        //return $request;
    }

    //method untuk edit data mom
    public function edit($id)
    {
        //mengambil data mom berdasarkan id yang di pilih
        $moms = DB::table("moms")->where("mom_id", $id)
            ->join("jobsides", "moms.mom_jobside", "=", "jobsides.jobside_id")
            ->join("meetings", "moms.mom_meeting", "=", "meetings.meeting_id")
            ->join("tempats", "moms.mom_tempat", "=", "tempats.tempat_id")
            ->join("pegawais as p1", "moms.mom_pemimpin", "=", "p1.pegawai_id")
            ->join("pegawais as p2", "moms.mom_notulen", "=", "p2.pegawai_id")
            ->join("pegawais as p3", "moms.mom_peserta", "=", "p3.pegawai_id")
            ->select("moms.*", "jobsides.jobside_jobsidee", "meetings.meeting_meetingg", "tempats.tempat_tempat_vanue", "p1.pegawai_nama as nama_pemimpin", "p2.pegawai_nama as nama_notulen", "p3.pegawai_nama as nama_peserta")
            ->get();
        //passing data mom yang di dapat ke view edit.blade.php
        return view("editt", [
            "moms" => $moms,
            "opmoms" => opmom::all(),
            "jobsides" => Jobside::all(),
            "meetings" => Meeting::all(),
            "tempats" => Tempat::all(),
            "pegawais" => Pegawai::all()
        ]);
    }

    //method untuk update data ke table mom
    public function update(Request $request)
    {
        //insert data ke table mom
        DB::table("moms")->where("mom_id", $request->id)->update([
            "mom_no" => $request->no,
            "mom_jobside" => $request->jobside,
            "mom_meeting" => $request->meeting,
            "mom_jenis_meeting" => $request->jenis_meeting,
            "mom_tempat" => $request->tempat,
            "mom_link" => $request->link,
            "mom_tanggal_dan_waktu" => $request->tanggal_dan_waktu,
            "mom_waktu_mulai" => $request->waktu_mulai,
            "mom_waktu_selesai" => $request->waktu_selesai,
            "mom_pemimpin" => $request->pemimpin,
            "mom_notulen" => $request->notulen,
            "mom_snack" => $request->snack,
            "mom_agenda" => $request->agenda,
            "mom_notes" => $request->notes,
            "mom_peserta" => $request->peserta
        ]);
        //alihkan halaman ke halaman mom
        return redirect("/mom")->with("success", "Data Berhasil Di Update");
    }
}
