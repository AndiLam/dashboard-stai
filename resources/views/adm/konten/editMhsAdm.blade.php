@extends('dashLayout.app')

@section('title', 'Dashboard Admin - STAI Al-Masthuriyah')

@section('sidebar')
    @include('Adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl font-bold mb-5">Kelola Data Mahasiswa</h1>

<div class="bg-white shadow-md rounded-lg p-6">
<div class="mb-4 flex justify-between items-center">
        <a href="{{ route('tambahMhs') }}" 
            class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 inline-block text-center">Tambah Mahasiswa
        </a>
    <div class="relative w-1/3">
        <input type="text" placeholder="Cari mahasiswa..." class="border border-gray-300 rounded-md px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-green-400"/>
        <span class="absolute inset-y-0 right-3 flex items-center text-gray-400"><i class="fas fa-search"></i></span>
    </div>
</div>

    <table class="w-full border-collapse border border-gray-300 text-left text-gray-700">
        <thead class="bg-gray-200">
            <tr class="bg-green-800 text-white">
                <th class="border border-gray-300 px-4 py-2">No</th>
                <th class="border border-gray-300 px-4 py-2">NIM</th>
                <th class="border border-gray-300 px-4 py-2">Nama Mahasiswa</th>
                <th class="border border-gray-300 px-4 py-2">Tempat Lahir</th>
                <th class="border border-gray-300 px-4 py-2">Tanggal Lahir</th>
                <th class="border border-gray-300 px-4 py-2">Nama Ibu Kandung</th>
                <th class="border border-gray-300 px-4 py-2">Program Studi</th>
                <th class="border border-gray-300 px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">1</td>
                <td class="border border-gray-300 px-4 py-2">112233</td>
                <td class="border border-gray-300 px-4 py-2">Andi Muhamad Nur Ilhami</td>
                <td class="border border-gray-300 px-4 py-2">Sukabumi</td>
                <td class="border border-gray-300 px-4 py-2">12-04-2003</td>
                <td class="border border-gray-300 px-4 py-2">Andi Rohaya</td>
                <td class="border border-gray-300 px-4 py-2">Pendidikan Agama Islam</td>
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
