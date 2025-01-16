<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DsnController extends Controller
{
    // Menampilkan halaman dashboard dosen
    public function dashboardDsn()
    {
        return view('dsn.dashboardDsn');
    }

    // Metode untuk mengembalikan data semester
    public function getData()
    {
        return [
            ['id' => 1, 'name' => 'Semester 1', 'classes' => [
                ['id' => 1, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Ilmu Pendidikan Islam'],
                ['id' => 2, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Pendidikan Kewarganegaraan'],
                ['id' => 3, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Bahasa Arab'],
                ['id' => 4, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Bahasa Indonesia'],
                ['id' => 5, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Fiqih'],
                ['id' => 6, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Sosiologi Pendidikan'],
                ['id' => 7, 'name' => 'PAI-A', 'programStudy' => 'Pendidikan Agama Islam','MatKul' => 'Baca Tulis Qur’an'],
            ]],
        ];
    }

    // Menampilkan halaman untuk jadwal kelas
    public function jadwalKelas()
    {
        return view('dsn.konten.jadwalKls');
    }

    // Menampilkan halaman untuk absensi
    public function isiAbsensi()
    {
        $semesters = $this->getData();

        return view('dsn.konten.absenDsn', compact('semesters'));
    }

    public function showAbsenDsn($semester, $kelas, $MatKul)
    {
        return view('dsn.konten.showAbsenDsn', compact('semester', 'kelas', 'MatKul'));
    }

    // Menampilkan halaman untuk pengisian niali mahasiswa
    public function isiNilai()
    {
        $semesters = $this->getData();

        return view('dsn.konten.nilaiDsn', compact('semesters'));
    }

    public function showNilaiDsn($semester, $kelas, $MatKul)
    {
        return view('dsn.konten.showNilaiDsn', compact('semester', 'kelas', 'MatKul'));
    }

    // Menampilkan halaman profile dosen
    public function profileDosen()
    {
        return view('dsn.profileDsn');
    }

    public function showResetFormDsn()
    {
        return view('dsn.layouts.resetDsn');
    }
}
