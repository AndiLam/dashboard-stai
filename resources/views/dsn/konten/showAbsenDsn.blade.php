@extends('dashLayout.app')

@section('title', 'Dashboard Dosen - STAI Al-Masthuriyah')

@section('sidebar')
    @include('dsn.layouts.sidebarDsn')
@endsection

@section('content')
<h1 class="text-4xl mb-5">Absensi Mahasiswa untuk Mata Kuliah {{ $MatKul }}</h1>
<!-- Filter -->
<div class="flex items-end space-x-4 mb-4">
    <div class="flex flex-col space-y-1">
        <label for="mataKuliah" class="text-sm font-medium">Pilih Pertemuan</label>
        <select id="mataKuliah" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
            <option>Pertemuan 1</option>
            <option>Pertemuan 2</option>
            <option>Pertemuan 3</option>
            <option>Pertemuan 4</option>
            <option>Pertemuan 5</option>
            <option>Pertemuan 6</option>
            <option>Pertemuan 7</option>
            <option>Pertemuan 8</option>
            <option>Pertemuan 9</option>
            <option>Pertemuan 10</option>
            <option>Pertemuan 11</option>
            <option>Pertemuan 12</option>
            <option>Pertemuan 13</option>
            <option>Pertemuan 14</option>
            <option>Pertemuan 15</option>
            <option>Pertemuan 16</option>
        </select>
    </div>
    <div class="flex self-end">
        <button class="bg-green-700 text-white hover:bg-green-900 px-4 py-2 rounded-md">Filter</button>
    </div>
</div>
<div class="grid grid-cols-2 gap-x-10 mb-4">
    <div>
        <div class="flex items-center mb-2">
            <p class=" w-28 font-bold">Mata Kuliah</p>
            <p class=" pr-2 font-bold">:</p>
            <p>{{ $MatKul }}</p>
        </div>
        <div class="flex items-center mb-2">
            <p class="w-28 font-bold">Kelas</p>
            <p class=" pr-2 font-bold">:</p>
            <p>PAI-A/S1/I</p>
        </div>
        <div class="flex items-center mb-2">
            <p class=" w-28 font-bold">SKS</p>
            <p class=" pr-2 font-bold">:</p>
            <p>3 SKS</p>
        </div>
        <div class="flex items-center mb-2">
            <p class="w-28 font-bold">Jadwal</p>
            <p class=" pr-2 font-bold">:</p>
            <p>Jumat, 07:40-10:10</p>
        </div>
        <div class="flex items-center mb-2">
            <p class="w-28 font-bold">Ruangan</p>
            <p class=" pr-2 font-bold">:</p>
            <p>PAI-1</p>
        </div>
        <div class="flex items-center mb-2">
            <p class="w-28 font-bold">Dosen</p>
            <p class=" pr-2 font-bold">:</p>
            <p>Sopian Alviana, S.Kom., M.Kom</p>
        </div>
    </div>
</div>   
<h2 class="text-lg mb-5">Daftar Mahasiswa Kelas {{ $kelas }}</h2>
<table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm"> 
    <div class="flex justify-between items-center mt-4">
        <p class="text-lg font-semibold">Status Kehadiran</p>
        <a href="#" id="btnHadirSemua" class="bg-green-500 text-white hover:bg-green-950 px-4 py-2 rounded-t-md">
            Hadir Semua
        </a>
    </div>    
    <thead>
        <tr class="bg-green-800 text-white">
            <th class="p-3 border">No</th>
            <th class="p-3 border">NIM</th>
            <th class="p-3 border">Nama</th>
            <th class="p-3 border">Semester</th>
            <th class="p-3 border">Kehadiran</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 1; $i <= 5; $i++)
        <tr>
            <td class="p-3 border text-center">{{ $i }}</td>
            <td class="p-3 border text-center">112233</td>
            <td class="p-3 border">Andi Muhamad Nur Ilhami</td>
            <td class="p-3 border text-center">1</td>
            <td class="p-3 border text-center">
                <select class="kehadiran pl-2 pr-10 py-1 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
                    <option value="0">Belum Diisi</option>
                    <option value="1">Hadir</option>
                    <option value="2">Sakit</option>
                    <option value="3">Izin</option>
                    <option value="4">Tanpa Keterangan</option>
                </select>
            </td>
        </tr>
        @endfor
    </tbody>
</table>
<div class="flex justify-end mt-4 gap-4">
    <a href="#" class="bg-green-500 text-white hover:bg-green-950 px-4 py-2 rounded-t-md">
        Simpan
    </a>
</div>
@endsection