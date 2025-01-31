@extends('dashLayout.app')

@section('title', 'Dashboard Admin - STAI Al-Masthuriyah')

@section('sidebar')
    @include('adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl mb-5">Nilai Mahasiswa untuk Mata Kuliah {{ $MatKul }}</h1>
<!-- Filter -->
<div class="flex items-end space-x-4 mb-4">
    <div class="flex flex-col space-y-1">
        <label for="semester" class="text-sm font-medium">Pilih Semester</label>
        <select id="semester" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
            <option>1</option>
        </select>
    </div>
    <div class="flex flex-col space-y-1">
        <label for="ruangan" class="text-sm font-medium">Pilih Kelas</label>
        <select id="ruangan" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
            <option>PAI-A</option>
        </select>
    </div>
    <div class="flex flex-col space-y-1">
        <label for="prodi" class="text-sm font-medium">Pilih Mata Kuliah</label>
        <select id="prodi" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
            <option>Ilmu Pendidikan Islam</option>
            <option>Pendidikan Kewarganegaraan</option>
            <option>Bahasa Arab</option>
            <option>Bahasa Indonesia</option>
            <option>Fiqih</option>
            <option>Sosiologi Pendidikan</option>
            <option>Baca Tulis Qur’an</option>
        </select>
    </div>
    <div class="flex self-end">
        <button class="bg-green-700 text-white hover:bg-green-900 px-4 py-2 rounded-md">Filter</button>
    </div>
</div>
<h2 class="text-lg mb-5">Daftar Mahasiswa Kelas {{ $kelas }}</h2>
<table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm"> 
    <thead>
        <tr class="bg-green-800 text-white">
            <th rowspan="2" class="p-3 border">No</th>
            <th rowspan="2" class="p-3 border">NIM</th>
            <th rowspan="2" class="p-3 border">Nama</th>
            <th rowspan="2" class="p-3 border">Semester</th>
            <th colspan="4" class="p-3 border">Aspek Nilai</th>
            <th rowspan="2" class="p-3 border">Nilai</th>
        </tr>
        <tr class="bg-green-800 text-white">
            <th class="p-3 border">Absen</th>
            <th class="p-3 border">Tugas</th>
            <th class="p-3 border">UTS</th>
            <th class="p-3 border">UAS</th>
        </tr>
    </thead>
    <tbody> <!-- Buat biar jadwal mengikuti kelas -->
        <tr>
            <td class="p-3 border text-center">1</td>
            <td class="p-3 border text-center">112233</td>
            <td class="p-3 border">Andi Muhamad Nur Ilhami</td>
            <td class="p-3 border text-center">1</td>
            <td class="p-3 border text-center">100</td>
            <td class="p-3 border text-center">100</td>
            <td class="p-3 border text-center">100</td>
            <td class="p-3 border text-center">100</td>
            <td class="p-3 border text-center">A</td>   
        </tr>
    </tbody>
</table>
<div class="w-full flex justify-end mt-4">
    <a href="#" class="bg-custom-blue text-white hover:bg-blue-950 px-4 py-2 rounded-t-lg">Ubah Nilai</a>
</div>
@endsection