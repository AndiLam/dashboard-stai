@extends('dashLayout.app')
@section('title', 'Dashboard Admin - STAI Al-Masthuriyah')
@section('sidebar')
    @include('Adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl mb-5">Nilai Mahasiswa</h1>

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
            <option value="PAI-A">PAI-A</option>
            <option value="HES-A">HES-A</option>
            <option value="KPI-A">KPI-A</option>
        </select>
    </div>
    <div class="relative">
        <input type="text" id="search" class="pl-3 pr-10 py-2 border border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md" placeholder="Cari Matkul/Dosen">
        <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"><i class="fas fa-search"></i></span>
    </div> 
</div>

<!-- Button Tambah Kelas -->
<div class="flex justify-between items-center mb-4">
    <h2 class="text-lg">Daftar Kelas</h2>
    <button class="flex items-center bg-green-600 text-white font-semibold px-4 py-2 rounded-lg shadow hover:bg-green-700 transition-transform transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
        <i class="fas fa-plus mr-2"></i>
        Tambah Kelas
    </button>
</div>

<table class="min-w-full border-collapse border border-green-800">
    <thead>
        <tr class="bg-green-800 text-white">
            <th class="p-3 text-left">Semester</th>
            <th class="p-3 text-left">Program Studi</th>
            <th class="p-3 text-left">Kelas</th>
            <th class="p-3 text-left">Mata Kuliah</th>
            <th class="p-3 text-left">Dosen Pengampu</th>
            <th class="p-3 text-left">Aksi</th>
        </tr>
    </thead>
    <tbody id="kelasTableBody">
        @foreach ($semesters as $semester)
            @foreach ($semester['classes'] as $class)
                <tr class="hover:bg-green-100 hover:shadow-lg transition-shadow cursor-pointer border-b-2"
                    dataSemester="{{ $semester['name'] }}"
                    dataKelas="{{ $class['name'] }}"
                    dataProdi="{{ $class['programStudy'] }}"
                    dataMatkul="{{ $class['MatKul'] }}"
                    dataDosen="{{ $class['dosen'] }}"
                    onclick="redirectToNilai(this)">
                    <td class="p-3">{{ $semester['name'] }}</td>
                    <td class="p-3">{{ $class['programStudy'] }}</td>
                    <td class="p-3">{{ $class['name'] }}</td>
                    <td class="p-3">{{ $class['MatKul'] }}</td>
                    <td class="p-3">{{ $class['dosen'] }}</td>
                    <td class="p-3 flex space-x-2">
                        <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>

<script>
    function redirectToNilai(row) {
        const semester = row.getAttribute('dataSemester');
        const kelas = row.getAttribute('dataKelas');
        const prodi = row.getAttribute('dataProdi');
        const Matkul = row.getAttribute('dataMatkul');
        
        // Redirect to the route with dynamic parameters
        window.location.href = `/nilai-adm/${semester}/${kelas}/${Matkul}`;
    }
</script>
@endsection
