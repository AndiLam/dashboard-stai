<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\DsnController;
use App\Http\Controllers\AdmController;


route::get('/', function() {   
    return redirect('/index');});

Route::get('/index', [LoginController::class, 'showRole'])->name('showRole');


// Rute untuk login mahasiswa
Route::get('/login', [LoginController::class, 'showMhsLoginForm'])->name('loginMhs');
Route::post('/login', [LoginController::class, 'loginMhs']);

// Rute untuk login dosen
Route::get('/login-dosen', [LoginController::class, 'showDsnLoginForm'])->name('loginDsn');
Route::post('/login-dosen', [LoginController::class, 'loginDsn']);

// Rute untuk login admin
Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('loginAdmin');
Route::post('/admin/login', [LoginController::class, 'loginAdmin']);

// Dashboard Routes
route::get('/dashboard', [DashboardController::class, 'mahasiswaDashboard'])->name('dashboard');
Route::get('/dashboard-dosen', [DashboardController::class, 'dosenDashboard'])->name('dashboardDsn');
Route::get('/dashboard-admin', [DashboardController::class, 'adminDashboard'])->name('dashboardAdm');

// Rute untuk fitur mahasiswa (KRS, KHS, Jadwal, dll.)
Route::get('/krs', [MhsController::class, 'krs'])->name('krs');
Route::get('/kartu-hasil-studi', [MhsController::class, 'kartuHasilStudi'])->name('khs');
Route::get('/jadwal-kuliah', [MhsController::class, 'jadwalKuliah'])->name('jadwal');
Route::get('/rencana-studi', [MhsController::class, 'pengisianRencanaStudi'])->name('prs');
Route::get('/status-mahasiswa', [MhsController::class, 'statusAktif'])->name('status');
Route::get('/absensi-mahasiswa', [MhsController::class, 'absensi'])->name('absensi');
Route::get('/riwayat-nilai', [MhsController::class, 'riwayat'])->name('riwayat');
Route::get('/keuangan', [MhsController::class, 'keuangan'])->name('keuangan');
Route::get('/perpustakaan', [MhsController::class, 'perpustakaan'])->name('perpustakaan');


// Rute untuk fitur dosen (KRS, KHS, Jadwal, dll.)
Route::get('/jadwal-kelas', [DsnController::class, 'jadwalKelas'])->name('jadwalKls');
Route::get('/isi-absensi', [DsnController::class, 'isiAbsensi'])->name('absen');
route::get('/absen-dsn/{semester}/{kelas}/{MatKul}', [DsnController::class, 'showAbsenDsn'])->name('showAbsenDsn');
Route::get('/pengisian-nilai', [DsnController::class, 'isiNilai'])->name('isiNilai');
route::get('/nilai-dsn/{semester}/{kelas}/{MatKul}', [DsnController::class, 'showNilaiDsn'])->name('showNilaiDsn');


// Rute untuk fitur admin (absen, nilai, dll.)
Route::get('/isi-absensi-admin', [AdmController::class, 'isiAbsensiAdm'])->name('absenAdm');
route::get('/absen-admin/{semester}/{kelas}/{MatKul}', [AdmController::class, 'showAbsenAdm'])->name('showAbsenAdm');
Route::get('/pengisian-nilai-admin', [AdmController::class, 'isiNilaiAdm'])->name('nilaiAdm');
route::get('/nilai-admin/{semester}/{kelas}/{MatKul}', [AdmController::class, 'showNilaiAdm'])->name('showNilaiAdm');
Route::get('/keuangan-admin', [AdmController::class, 'keuangAdm'])->name('uangAdm');
Route::get('/edit-dosen-admin', [AdmController::class, 'editDosenAdm'])->name('dosenAdm');
Route::get('/edit-mahasiswa-admin', [AdmController::class, 'editMahasiswaAdm'])->name('mhsAdm');
Route::get('/edit-matkul-admin', [AdmController::class, 'editMatkulAdm'])->name('matkulAdm');
Route::get('/edit-jadwal-matkul-admin', [AdmController::class, 'editJadwalKuliahAdm'])->name('jadwalAdm');
Route::get('/edit-ruangan-admin', [AdmController::class, 'editGedungAdm'])->name('gedungAdm');
Route::get('/kelola-admin', [AdmController::class, 'kelolaAdmin'])->name('kelolaAdm');
Route::get('/tambah-admin', [AdmController::class, 'tambahAdmin'])->name('tambahAdm');
Route::get('/tambah-dosen', [AdmController::class, 'tambahDosen'])->name('tambahDsn');
Route::get('/tambah-mahasiswa', [AdmController::class, 'tambahMahasiswa'])->name('tambahMhs');
Route::get('/tambah-matkul', [AdmController::class, 'tambahMatkul'])->name('tambahMk');
Route::get('/tambah-jadwal', [AdmController::class, 'tambahJadwalMatkul'])->name('tambahJadwalMk');
Route::get('/tambah-ruangan', [AdmController::class, 'tambahRuangan'])->name('tambahKls');




// Rute untuk profil mahasiswa
Route::get('/profile', [MhsController::class, 'profile'])->name('profile');

// Rute untuk profil dosen
Route::get('/profile-dosen', [DsnController::class, 'profileDosen'])->name('profileDsn');

// Rute untuk profil admin
Route::get('/profile-admin', [AdmController::class, 'profileAdmin'])->name('profileAdm');

// Rute untuk logout konfirmasi
Route::get('/logout/{role}', function($role) {
    session()->flush(); // Menghapus semua session

    // Mengarahkan kembali ke halaman login sesuai role
    if ($role === 'mahasiswa') {
        return redirect()->route('loginMhs')->with('success', 'Logout berhasil');
    } elseif ($role === 'dosen') {
        return redirect()->route('loginDsn')->with('success', 'Logout berhasil');
    } elseif ($role === 'admin') {
        return redirect()->route('loginAdmin')->with('success', 'Logout berhasil');
    }

    return redirect('/'); // Fallback jika role tidak dikenali
})->name('logout');


// reset password
Route::get('reset-password-mahasiswa', [MhsController::class, 'showResetFormMhs'])->name('mhsReset');
Route::get('reset-password-dosen', [DsnController::class, 'showResetFormDsn'])->name('dsnReset');
Route::get('reset-password-admin', [AdmController::class, 'showResetFormAdm'])->name('admReset');

