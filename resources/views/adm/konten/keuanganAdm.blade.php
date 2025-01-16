@extends('dashLayout.app')

@section('title', 'Dashboard Admin - STAI Al-Masthuriyah')

@section('sidebar')
    @include('Adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl mb-5">Keuangan Mahasiswa</h1>

    <!-- Pembayaran -->
    <div class="content mt-5">
        <h3 class="text-2xl mb-4">Pembayaran</h3>
        <table class="border-collapse w-full border border-gray-300 dark:border-gray-500 bg-white dark:bg-gray-800 text-sm shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-green-800 text-white">
                    <th class="p-3 border">No</th>
                    <th class="p-3 border">NIM</th>
                    <th class="p-3 border w-60">Nama</th>
                    <th class="p-3 border">Kelas</th>
                    <th class="p-3 border">Bulan Bayar</th>
                    <th class="p-3 border">Nominal</th>
                    <th class="p-3 border">Catatan</th>
                    <th class="p-3 border">Status</th>
                </tr>
                <tr class="text-gray-700 bg-gray-50 hover:bg-gray-100 transition-all duration-300">
                    <td class="p-3 border">1</td>
                    <td class="p-3 border">10121304</td>
                    <td class="p-3 border">Andi Muhamad Nur Ilhami</td>
                    <td class="p-3 border">PAI-1</td>
                    <td class="p-3 border">September</td>
                    <td class="p-3 border">Rp300.000</td>
                    <td class="p-3 border">
                        <input type="text" id="note" name="note" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-green-700" placeholder="Masukkan Catatan...">
                    </td>
                    <td class="p-3 border bg-gray-50">
                        <div class="flex justify-center space-x-3">
                            <!-- Tombol centang (Bayar) -->
                            <button class="bg-green-500 text-white hover:bg-green-700 transition-transform transform hover:scale-105 px-3 py-2 rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-green-700" title="Setujui Pembayaran">
                                <i class="fas fa-check"></i>
                            </button>
                            <!-- Tombol silang (Tidak Bayar) -->
                            <button class="bg-red-500 text-white hover:bg-red-700 transition-transform transform hover:scale-105 px-3 py-2 rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-red-700" title="Tolak Pembayaran">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
    </div>

    <!-- History Pembayaran -->
    <div class="content mt-10">
        <h3 class="text-2xl mb-4">History Pembayaran</h3>
        
        <div class="flex mb-4">
            <!-- Input Pilih Tanggal -->
            <div class="flex items-center mr-3">
                <label for="date" class="mr-2 text-gray-700 dark:text-gray-300">Pilih Tanggal:</label>
                <input type="date" id="date" name="date" placeholder="00/00/0000" class="px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-green-700">
            </div>

            <!-- Input Pencarian -->
            <div class="relative">
                <input type="text" id="search" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md" placeholder="Cari Mahasiswa">
                <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"><i class="fas fa-search"></i></span>
            </div>
        </div>

        <!-- Table History Pembayaran -->
        <table class="border-collapse w-full border border-gray-300 dark:border-gray-500 bg-white dark:bg-gray-800 text-sm shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-green-800 text-white">
                    <th class="p-3 border">No</th>
                    <th class="p-3 border">Tanggal</th>
                    <th class="p-3 border">NIM</th>
                    <th class="p-3 border">Nama</th>
                    <th class="p-3 border">Kelas</th>
                    <th class="p-3 border">Bulan Bayar</th>
                    <th class="p-3 border">Nominal</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border">Note</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data dummy -->
                <tr class="text-gray-700 bg-gray-50 hover:bg-gray-100 transition-all duration-300">
                    <td class="p-3 border">1</td>
                    <td class="p-3 border">12/09/2024</td>
                    <td class="p-3 border">10121304</td>
                    <td class="p-3 border">Andi Muhamad Nur Ilhami</td>
                    <td class="p-3 border">PAI-1</td>
                    <td class="p-3 border">September</td>
                    <td class="p-3 border">Rp300.000</td>
                    <td class="p-3 border text-center">
                        <div><i class="fas fa-check text-green-600"></i></div>
                    </td>
                    <td class="p-3 border">Pembayaran Sukses</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
