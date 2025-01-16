@extends('dashLayout.app')

@section('title', 'Tambah Data Mahasiswa - STAI Al-Masthuriyah')

@section('sidebar')
    @include('Adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl font-bold mb-5">Tambah Data Mahasiswa</h1>

<div class="bg-white shadow-md rounded-lg p-6">
    <form class="space-y-4">
        @csrf
        <div>
            <label for="nim" class="block text-gray-700">NIM</label>
            <input 
                type="text" 
                id="nim" 
                name="nim" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan NIM"
                required
            />
        </div>
        <div>
            <label for="nama" class="block text-gray-700">Nama</label>
            <input 
                type="text" 
                id="nama" 
                name="nama" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Nama Mahasiswa"
                required
            />
        </div>
        <div>
            <label for="TL" class="block text-gray-700">`Tempat Lahir</label>
            <input 
                type="text" 
                id="TL" 
                name="TL" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Tempat Lahir"
                required
            />
        </div>
        <div>
            <label for="TgL" class="block text-gray-700">Tanggal Lahir</label>
            <input 
                type="text" 
                id="TgL" 
                name="TgL" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Tanggal Lahir"
                required
            />
        </div>
        <div>
            <label for="ibu" class="block text-gray-700">Nama Ibu Kandung</label>
            <input 
                type="text" 
                id="ibu" 
                name="ibu" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Nama Ibu Kandung"
                required
            />
        </div>
        <div>
            <label for="prodi" class="block text-gray-700">Program Studi</label>
            <input 
                type="text" 
                id="prodi" 
                name="prodi" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Program Studi"
                required
            />
        </div>
        <div>
            <button 
                type="submit" 
                class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600"
            >
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
