@extends('dashLayout.app')

@section('title', 'Tambah Mata Kuliah - STAI Al-Masthuriyah')

@section('sidebar')
    @include('Adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl font-bold mb-5">Tambah Mata Kuliah</h1>

<div class="bg-white shadow-md rounded-lg p-6">
    <form class="space-y-4">
        @csrf
        <div>
            <label for="kode" class="block text-gray-700">Kode Mata Kuliah</label>
            <input 
                type="text" 
                id="kode" 
                name="kode" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Kode"
                required
            />
        </div>
        <div>
            <label for="nama" class="block text-gray-700">Nama Mata Kuliah</label>
            <input 
                type="text" 
                id="nama" 
                name="nama" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Nama Mata Kuliah"
                required
            />
        </div>
        <div>
            <label for="sks" class="block text-gray-700">Jumlah SKS</label>
            <input 
                type="number" 
                id="sks" 
                name="sks" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Jumlah SKS"
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
