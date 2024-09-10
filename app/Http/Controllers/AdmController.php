<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    // Menampilkan halaman dashboard admin
    public function dashboardAdm()
    {
        return view('adm.dashboardAdm');
    }

    // Menampilkan halaman KRS/Kartu Ujian
    public function krs()
    {
        return view('mhs.konten.krs');
    }

    // Menampilkan halaman Kartu Hasil Studi
    public function kartuHasilStudi()
    {
        return view('mhs.konten.khs');
    }

    // Menampilkan halaman Jadwal Kuliah
    public function jadwalKuliah()
    {
        return view('mhs.konten.jadwal');
    }

    // Menampilkan halaman Pengisian Rencana Studi
    public function pengisianRencanaStudi()
    {
        return view('mhs.konten.prs');
    }

    // Menampilkan halaman Status Aktif Mahasiswa
    public function statusAktif()
    {
        return view('mhs.konten.status');
    }

    // Menampilkan halaman Absensi Mahasiswa
    public function absensi()
    {
        return view('mhs.konten.absensi');
    }

    // Menampilkan halaman Transkrip Mahasiswa
    public function transkrip()
    {
        return view('mhs.konten.transkrip');
    }

    // Menampilkan halaman Keuangan Mahasiswa
    public function keuangan()
    {
        return view('mhs.konten.keuangan');
    }

    // Menampilkan halaman Perpustakaan
    public function perpustakaan()
    {
        return view('mhs.konten.perpustakaan');
    }

    // Menampilkan halaman Profil Mahasiswa
    public function profile()
    {
        return view('mhs.profile');
    }
}
