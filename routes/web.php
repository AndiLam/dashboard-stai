<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\DsnController;



route::get('/', function() {   
    return redirect('/login');});

// Rute untuk login mahasiswa
Route::get('/login', [LoginController::class, 'showMhsLoginForm'])->name('mhs.loginMhs');
Route::post('/login', [LoginController::class, 'loginMhs']);

// Rute untuk login dosen
Route::get('/login-dosen', [LoginController::class, 'showDsnLoginForm'])->name('dsn.loginDsn');
Route::post('/login-dosen', [LoginController::class, 'loginDsn']);

// Rute untuk login admin
Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('adm.loginAdmin');
Route::post('/admin/login', [LoginController::class, 'loginAdmin']);

// Dashboard Routes
route::get('/dashboard', [DashboardController::class, 'mahasiswaDashboard'])->name('dashboard');
Route::get('/dashboard-dosen', [DashboardController::class, 'dosenDashboard'])->name('dashboardDsn');
Route::get('/dashboard-admin', [DashboardController::class, 'adminDashboard'])->name('dashboardAdm');

// Rute untuk fitur mahasiswa (KRS, KHS, Jadwal, dll.)
Route::get('/krs', [MhsController::class, 'krs'])->name('krs');
Route::get('/kartu-hasil-studi', [MhsController::class, 'kartuHasilStudi'])->name('khs');
Route::get('/jadwal-kuliah', [MhsController::class, 'jadwalKuliah'])->name('jadwal');
Route::get('/pengisian-rencana-studi', [MhsController::class, 'pengisianRencanaStudi'])->name('prs');
Route::get('/status-mahasiswa', [MhsController::class, 'statusAktif'])->name('status');
Route::get('/absensi', [MhsController::class, 'absensi'])->name('absensi');
Route::get('/transkrip', [MhsController::class, 'transkrip'])->name('transkrip');
Route::get('/keuangan', [MhsController::class, 'keuangan'])->name('keuangan');
Route::get('/perpustakaan', [MhsController::class, 'perpustakaan'])->name('perpustakaan');


// Rute untuk fitur doseb (KRS, KHS, Jadwal, dll.)
Route::get('/jadwal-kelas', [DsnController::class, 'jadwalKelas'])->name('jadwalKls');
Route::get('/isi-absensi', [DsnController::class, 'isiAbsensi'])->name('absen');
Route::get('/pengisian-nilai', [DsnController::class, 'isiNilai'])->name('isiNilai');


// Rute untuk profil mahasiswa
Route::get('/profile', [MhsController::class, 'profile'])->name('profile');

// Rute untuk logout konfirmasi
Route::get('/logout', [MhsController::class, 'logout'])->name('logout');