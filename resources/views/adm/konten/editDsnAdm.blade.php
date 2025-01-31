@extends('dashLayout.app')

@section('title', 'Dashboard Admin - STAI Al-Masthuriyah')

@section('sidebar')
    @include('Adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl font-bold mb-5">Kelola Data Dosen</h1>

<div class="bg-white shadow-md rounded-lg p-6">
<div class="mb-4 flex justify-between items-center">
        <a href="{{ route('tambahDsn') }}" 
            class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 inline-block text-center">Tambah Dosen
        </a>
    <div class="relative w-1/3"> 
        <input type="text" placeholder="Cari dosen..." class="border border-gray-300 rounded-md px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400"/>
        <span class="absolute inset-y-0 right-3 flex items-center text-gray-400"><i class="fas fa-search"></i></span>
    </div>
</div>

    <table class="w-full border-collapse border border-gray-300 text-left text-gray-700">
        <thead class="bg-gray-200">
            <tr class="bg-green-800 text-white">
                <th class="border border-gray-300 px-4 py-2">No</th>
                <th class="border border-gray-300 px-4 py-2">NIDN</th>
                <th class="border border-gray-300 px-4 py-2">Nama Dosen</th>
                <th class="border border-gray-300 px-4 py-2">Email</th>
                <th class="border border-gray-300 px-4 py-2">Status</th>
                <th class="border border-gray-300 px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">1</td>
                <td class="border border-gray-300 px-4 py-2">445566</td>
                <td class="border border-gray-300 px-4 py-2">Sopian Alviana, S.Kom., M.Kom</td>
                <td class="border border-gray-300 px-4 py-2">sopian.alviana@email.almast.ac.id</td>
                <td class="border border-gray-300 px-4 py-2">Dosen Tetap</td>
                <td class="border border-gray-300 px-4 py-2">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 mr-2">
                        Edit
                    </button>
                    <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">
                        Hapus
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
