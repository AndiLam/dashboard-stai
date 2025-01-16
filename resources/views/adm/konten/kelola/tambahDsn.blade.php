@extends('dashLayout.app')

@section('title', 'Tambah Data Dosen - STAI Al-Masthuriyah')

@section('sidebar')
    @include('Adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl font-bold mb-5">Tambah Data Dosen</h1>

<div class="bg-white shadow-md rounded-lg p-6">
    <form class="space-y-4">
        @csrf
        <div>
            <label for="nidn" class="block text-gray-700">NIDN</label>
            <input 
                type="text" 
                id="nidn" 
                name="nidn" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan NIDN"
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
                placeholder="Masukkan Nama Dosen"
                required
            />
        </div>
        <div>
            <label for="email" class="block text-gray-700">Email</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Email"
                required
            />
        </div>
        <div>
            <label for="status" class="block text-gray-700">Status</label>
            <input 
                type="status" 
                id="status" 
                name="status" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Status"
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
