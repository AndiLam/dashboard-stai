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

    // Metode untuk mengembalikan data semester
    public function getData()
    {
        return [
            ['id' => 1, 'name' => 'Semester 1', 'classes' => [
                ['id' => 1, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Ilmu Pendidikan Islam', 'dosen' => 'Sopian Alviana, S.Kom., M.Kom'],
                ['id' => 2, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Pendidikan Kewarganegaraan', 'dosen' => 'Sopian Alviana, S.Kom., M.Kom'],
                ['id' => 3, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Bahasa Arab', 'dosen' => 'Sopian Alviana, S.Kom., M.Kom'],
                ['id' => 4, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Bahasa Indonesia', 'dosen' => 'Sopian Alviana, S.Kom., M.Kom'],
                ['id' => 5, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Fiqih', 'dosen' => 'Sopian Alviana, S.Kom., M.Kom'],
                ['id' => 6, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Sosiologi Pendidikan', 'dosen' => 'Sopian Alviana, S.Kom., M.Kom'],
                ['id' => 7, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Baca Tulis Qur’an', 'dosen' => 'Sopian Alviana, S.Kom., M.Kom'],
                ['id' => 8, 'name' => 'HES-A', 'programStudy' => 'Hukum Ekonomi Syariah','MatKul' => 'Ilmu Hukum', 'dosen' => '-'],
                ['id' => 9, 'name' => 'KPI-A', 'programStudy' => 'Komunikasi & Penyiaran Islam','MatKul' => 'Ilmu Penyiaran', 'dosen' => '-'],
            ]],
        ];
    }

    // Menampilkan halaman untuk absensi
    public function isiAbsensiAdm()
    {
        $semesters = $this->getData();

        return view('adm.konten.absenAdm', compact('semesters'));
    }

    public function showAbsenAdm($semester, $kelas, $MatKul)
    {
        return view('adm.konten.showAbsenAdm', compact('semester', 'kelas', 'MatKul'));
    }

    
    // Menampilkan halaman untuk pengisian nilai mahasiswa
    public function isiNilaiAdm()
    {
        $semesters = $this->getData();

        return view('adm.konten.nilaiAdm', compact('semesters'));
    }

    public function showNilaiAdm($semester, $kelas, $MatKul)
    {
        return view('adm.konten.showNilaiAdm', compact('semester', 'kelas', 'MatKul'));
    }
    
    // Menampilkan halaman keuangan
    public function keuangAdm()
    {
        return view('adm.konten.keuanganAdm');
    }
    
    // Menampilkan halaman manajemen
    // Menampilkan halaman keuangan
    public function editDosenAdm()
    {
        return view('adm.konten.editDsnAdm');
    }

    // Menampilkan halaman keuangan
    public function editMahasiswaAdm()
    {
        return view('adm.konten.editMhsAdm');
    }

    // Menampilkan halaman keuangan
    public function editMatkulAdm()
    {
        return view('adm.konten.editMkAdm');
    }

    // Menampilkan halaman keuangan
    public function editJadwalKuliahAdm()
    {
        return view('adm.konten.jdwlKulAdm');
    }

    public function editGedungAdm()
    {
        return view('adm.konten.editGdgAdm');
    }

    public function kelolaAdmin()
    {
        return view('adm.konten.kelolaAdm');
    }

    public function tambahAdmin()
    {
        return view('adm.konten.kelola.tambahAdm');
    }

    public function tambahDosen()
    {
        return view('adm.konten.kelola.tambahDsn');
    }

    public function tambahMahasiswa()
    {
        return view('adm.konten.kelola.tambahMhs');
    }

    public function tambahMatkul()
    {
        return view('adm.konten.kelola.tambahMk');
    }

    public function tambahJadwalMatkul()
    {
        return view('adm.konten.kelola.tambahJadwalMk');
    }

    public function tambahRuangan()
    {
        return view('adm.konten.kelola.tambahKls');
    }

    // Menampilkan halaman profile dosen
    public function profileAdmin()
    {
        return view('adm.profileAdm');
    }   
}
