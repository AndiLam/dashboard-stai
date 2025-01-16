@extends('dashLayout.app')

@section('title', 'Tambah Data Ruangan - STAI Al-Masthuriyah')

@section('sidebar')
    @include('Adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl font-bold mb-5">Tambah Data Ruangan</h1>

<div class="bg-white shadow-md rounded-lg p-6">
    <form class="space-y-4">
        @csrf
        <div>
            <label for="ruangan" class="block text-gray-700">Nama Ruangan</label>
            <input 
                type="text" 
                id="ruangan" 
                name="ruangan" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Nama Ruangan"
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
