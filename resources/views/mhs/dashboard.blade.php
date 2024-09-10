@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa')

@section('sidebar')
    @include('mhs.layouts.sidebar')
@endsection


@section('content')
<div class="dashboard">
    <h1 class="text-4xl mb-5">Dashboard Mahasiswa</h1>
    <div class="semester-info">
        <p>Semester: 20241 (2024/2025 Ganjil)</p>
    </div>
    <div class="card-container flex gap-5 flex-wrap">
        <div class="card bg-white rounded-lg shadow-md p-4 flex-1 transform transition-transform hover:scale-105 hover:shadow-lg">
            <i class="fas fa-calendar-alt text-3xl text-green-600 mb-3"></i>
            <h2 class="font-serif text-2xl mb-2 text-green-600">Pengisian Rencana Studi</h2>
            <p class="text-gray-600">19-08-2024 S.D 26-09-2024</p>
        </div>
        <div class="card bg-white rounded-lg shadow-md p-4 flex-1 transform transition-transform hover:scale-105 hover:shadow-lg">
            <i class="fas fa-thumbs-up text-3xl text-green-600 mb-3"></i>
            <h2 class="font-serif text-2xl mb-2 text-green-600">Persetujuan Rencana Studi</h2>
            <p class="text-gray-600">19-08-2024 S.D 27-09-2024</p>
        </div>
        <div class="card bg-white rounded-lg shadow-md p-4 flex-1 transform transition-transform hover:scale-105 hover:shadow-lg">
            <i class="fas fa-users text-3xl text-green-600 mb-3"></i>
            <h2 class="font-serif text-2xl mb-2 text-green-600">Pemilihan Kelas</h2>
            <p class="text-gray-600">19-08-2024 S.D 28-09-2024</p>
        </div>
    </div>
    <div class="billing-info bg-white p-4 mt-5">
        <h3 class="text-2xl mb-4">Informasi Tagihan Biaya Kuliah</h3>
        <p>Pembayaran Biaya Kuliah ditransfer ke Virtual Account Bank BNI <strong>(9884215910121304)</strong></p>
        <table class="w-full border-collapse mt-4">
            <thead>
                <tr class="bg-green-700 text-white">
                    <th class="p-3 border">Angsuran</th>
                    <th class="p-3 border">Biaya Kuliah</th>
                    <th class="p-3 border">Virtual Account</th>
                    <th class="p-3 border">Periode Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-3 border">Angsuran 1 Smt 7 (Tahap 1)</td>
                    <td class="p-3 border">4.403.000</td>
                    <td class="p-3 border">9884215910121304</td>
                    <td class="p-3 border">26 - 30 Agustus 2024</td>
                </tr>
            </tbody>
        </table>
    </div>
    <section class="content mt-5">
        <h2 class="text-2xl mb-4">Indeks Prestasi</h2>
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-green-700 text-white">
                    <th class="p-3 border">Semester</th>
                    <th class="p-3 border">Indeks Prestasi</th>
                    <th class="p-3 border">SKS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-3 border">Ganjil 2023/2024</td>
                    <td class="p-3 border">3.85</td>
                    <td class="p-3 border">24</td>
                </tr>
                <tr>
                    <td class="p-3 border">Genap 2023/2024</td>
                    <td class="p-3 border">3.90</td>
                    <td class="p-3 border">22</td>
                </tr>
                <tr>
                    <td class="p-3 border">Ganjil 2024/2025</td>
                    <td class="p-3 border">3.80</td>
                    <td class="p-3 border">24</td>
                </tr>
            </tbody>
        </table>
    </section>
</div>
@endsection
