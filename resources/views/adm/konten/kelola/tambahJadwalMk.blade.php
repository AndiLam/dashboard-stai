@extends('dashLayout.app')

@section('title', 'Tambah Data Kelas - STAI Al-Masthuriyah')

@section('sidebar')
    @include('Adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl font-bold mb-5">Tambah Jadwal Mata Kuliah</h1>

<div class="bg-white shadow-md rounded-lg p-6">
    <form class="space-y-4">
        @csrf
        <div>
            <label for="nama" class="block text-gray-700">Pilih Mata Kuliah</label>
            <select 
                id="nama" 
                name="nama" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                required>
                <option value="">Pilih Mata Kuliah</option>
                <option value="matkul1">Ilmu Pendidikan Islam</option>
                <option value="matkul2">Pendidikan Kewarganegaraan</option>
                <option value="matkul3">Bahasa Arab</option>
                <option value="matkul4">Bahasa Indonesia</option>
                <option value="matkul5">Fiqih</option>
                <option value="matkul6">Sosiologi Pendidikan</option>
                <option value="matkul7">Baca Tulis Qur’an</option>
            </select>
        </div>
        <div>
            <label for="hari" class="block text-gray-700">Hari</label>
            <input 
                type="number" 
                id="hari" 
                name="hari" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Hari"
                required
            />
        </div>
        <div>
            <label for="jam" class="block text-gray-700">Jam</label>
            <input 
                type="text" 
                id="jam" 
                name="jam" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Jam"
                required
            />
        </div>
        <div>
            <label for="ruangan" class="block text-gray-700">Ruangan</label>
            <input 
                type="text" 
                id="ruangan" 
                name="ruangan" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Ruangan"
                required
            />
        </div>
        <div>
            <label for="dosen" class="block text-gray-700">Dosen</label>
            <input 
                type="text" 
                id="dosen" 
                name="dosen" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Dosen"
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
