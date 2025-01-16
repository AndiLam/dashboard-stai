@extends('dashLayout.app')

@section('title', 'Dashboard Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('mhs.layouts.sidebar')
@endsection

@section('content')
    <h1 class="text-4xl mb-5">e-Registrasi Ulang</h1>
    <p class="mt-2">Semester: 20241 (2024/2025 Ganjil)</p>

    <div class="border p-4 rounded-md bg-gray-50">
        <div class="grid grid-cols-2 gap-x-10 mb-4">
            @foreach([
                ['label' => 'NIM', 'value' => '10121304'],
                ['label' => 'Nama', 'value' => 'Andi Muhamad Nur Ilhami'],
                ['label' => 'Dosen Wali', 'value' => 'Sopian Alviana, S.Kom., M.Kom']
            ] as $info)
                <div class="flex items-center mb-2">
                    <p class="w-28 font-bold">{{ $info['label'] }}</p>
                    <p class="pr-2 font-bold">:</p>
                    <p>{{ $info['value'] }}</p>
                </div>
            @endforeach

            @php
                $kelas = 'PAI-A';
            @endphp

            @foreach([
                ['label' => 'Semester', 'value' => 'Ganjil 2024/2025'],
                ['label' => 'Jurusan', 'value' => 'Pendidikan Agama Islam'],
                ['label' => 'Kelas', 'value' => $kelas]
            ] as $info)
                <div class="flex items-center mb-2">
                    <p class="w-28 font-bold">{{ $info['label'] }}</p>
                    <p class="pr-2 font-bold">:</p>
                    <p>{{ $info['value'] }}</p>
                </div>
            @endforeach
        </div>      

        <!-- Pilihan Mata Kuliah -->
        <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
            <thead>
                <tr class="bg-green-800 text-white">
                    <th class="p-3 border">Check</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border">Kode <br>Mata Kuliah</th>
                    <th class="p-3 border">Mata Kuliah</th>
                    <th class="p-3 border">Semester</th>
                    <th class="p-3 border">SKS</th>
                </tr>
            </thead>
            <tbody>
                @foreach([
                    ['value' => 'PAI', 'status' => 'Diambil', 'kode' => '00001', 'nama' => 'Ilmu Pendidikan Islam', 'semester' => '1', 'sks' => '3'],
                    ['value' => 'PAI', 'status' => 'Diambil', 'kode' => '00002', 'nama' => 'Pendidikan Kewarganegaraan', 'semester' => '1', 'sks' => '3'],
                    ['value' => 'PAI', 'status' => 'Diambil', 'kode' => '00003', 'nama' => 'Bahasa Arab', 'semester' => '1', 'sks' => '3'],
                    ['value' => 'PAI', 'status' => 'Diambil', 'kode' => '00004', 'nama' => 'Bahasa Indonesia', 'semester' => '1', 'sks' => '3'],
                    ['value' => 'PAI', 'status' => 'Diambil', 'kode' => '00005', 'nama' => 'Fiqih', 'semester' => '1', 'sks' => '3'],
                    ['value' => 'PAI', 'status' => 'Diambil', 'kode' => '00006', 'nama' => 'Sosiologi Pendidikan', 'semester' => '1', 'sks' => '3'],
                    ['value' => 'PAI', 'status' => 'Diambil', 'kode' => '00007', 'nama' => 'Baca Tulis Qur’an', 'semester' => '1', 'sks' => '2'],
                    ['value' => 'PAI', 'status' => 'Tidak', 'kode' => '00008', 'nama' => 'Ilmu Sosial', 'semester' => '1', 'sks' => '2']
                ] as $matkul)
                    <tr>
                        <td class="p-3 border text-center">
                            <!-- Semua checkbox di-disable, hanya yang diambil yang dicentang -->
                            <input type="checkbox" name="matkul" value="{{ $matkul['value'] }}" 
                                   {{ $kelas == 'PAI-A' && $matkul['status'] == 'Diambil' ? 'checked' : '' }} disabled>
                        </td>
                        <td class="p-3 border text-center">{{ $matkul['status'] }}</td>
                        <td class="p-3 border text-center">{{ $matkul['kode'] }}</td>
                        <td class="p-3 border">{{ $matkul['nama'] }}</td>
                        <td class="p-3 border text-center">{{ $matkul['semester'] }}</td>
                        <td class="p-3 border text-center">{{ $matkul['sks'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
