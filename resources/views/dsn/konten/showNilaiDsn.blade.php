@extends('dashLayout.app')

@section('title', 'Dashboard Dosen - STAI Al-Masthuriyah')

@section('sidebar')
    @include('dsn.layouts.sidebarDsn')
@endsection

@section('content')
<h1 class="text-4xl mb-5">Nilai Mahasiswa untuk Mata Kuliah {{ $MatKul }}</h1>
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
    <thead>
        <tr class="bg-green-800 text-white">
            <th rowspan="2" class="p-3 border">No</th>
            <th rowspan="2" class="p-3 border">NIM</th>
            <th rowspan="2" class="p-3 border">Nama</th>
            <th rowspan="2" class="p-3 border">Semester</th>
            <th colspan="5" class="p-3 border">Aspek Nilai</th>
            <th rowspan="2" class="p-3 border">Total</th>
            <th span="2" class="p-3 border">Nilai</th>
        </tr>
        <tr class="bg-green-800 text-white">
            <th class="p-3 border">Absen</th>
            <th class="p-3 border">Tugas Mandiri</th>
            <th class="p-3 border">Tugas Terstruktur</th>
            <th class="p-3 border">UTS</th>
            <th class="p-3 border">UAS</th>
        </tr>
    </thead>
    <tbody>
        @php
            $dataMahasiswa = [
                ['nim' => '112233', 'nama' => 'Andi Muhamad Nur Ilhami', 'semester' => 1, 'absen' => 90, 'mandiri' => 85, 'terstruktur' => 80, 'uts' => 88, 'uas' => 90],
                ['nim' => '332211', 'nama' => 'Budi Setiawan', 'semester' => 1, 'absen' => 70, 'mandiri' => 75, 'terstruktur' => 65, 'uts' => 70, 'uas' => 68],
            ];
        @endphp
        @foreach ($dataMahasiswa as $key => $mhs)
            @php
                $total = ($mhs['absen'] * 0.4) + ($mhs['mandiri'] * 0.1) + ($mhs['terstruktur'] * 0.1) + ($mhs['uts'] * 0.2) + ($mhs['uas'] * 0.2);
                $AM = '';
                if ($total >= 80) $AM = 'A';
                elseif ($total >= 66) $AM = 'B';
                elseif ($total >= 56) $AM = 'C';
                elseif ($total >= 45) $AM = 'D';
                else $AM = 'E';
            @endphp
            @php
                $total = ($mhs['absen'] * 0.4) + ($mhs['mandiri'] * 0.1) + ($mhs['terstruktur'] * 0.1) + ($mhs['uts'] * 0.2) + ($mhs['uas'] * 0.2);
                $AM = '';
                if ($total >= 80) $AM = 'A';
                elseif ($total >= 66) $AM = 'B';
                elseif ($total >= 56) $AM = 'C';
                elseif ($total >= 45) $AM = 'D';
                else $AM = 'E';
            @endphp
            <tr>
                <td class="p-3 border text-center">{{ $key + 1 }}</td>
                <td class="p-3 border text-center">{{ $mhs['nim'] }}</td>
                <td class="p-3 border">{{ $mhs['nama'] }}</td>
                <td class="p-3 border text-center">{{ $mhs['semester'] }}</td>
                <td class="p-3 border text-center">{{ $mhs['absen'] }}</td>
                <td class="p-3 border text-center">{{ $mhs['mandiri'] }}</td>
                <td class="p-3 border text-center">{{ $mhs['terstruktur'] }}</td>
                <td class="p-3 border text-center">{{ $mhs['uts'] }}</td>
                <td class="p-3 border text-center">{{ $mhs['uas'] }}</td>
                <td class="p-3 border text-center">{{ round($total, 2) }}</td>
                <td class="p-3 border text-center">{{ $nilai }}</td>   
            </tr>
        @endforeach
    </tbody>
</table>
<div class="w-full flex justify-end mt-4">
    <a href="#" class="bg-custom-blue text-white hover:bg-blue-950 px-4 py-2 rounded-t-lg">Ubah Nilai</a>
</div>
@endsection
