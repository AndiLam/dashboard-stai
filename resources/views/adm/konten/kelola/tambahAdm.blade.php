@extends('dashLayout.app')

@section('title', 'Tambah Data Admin - STAI Al-Masthuriyah')

@section('sidebar')
    @include('Adm.layouts.sidebarAdm')
@endsection

@section('content')
<h1 class="text-4xl font-bold mb-5">Tambah Data Admin</h1>

<div class="bg-white shadow-md rounded-lg p-6">
    <form class="space-y-4">
        @csrf
        <div>
            <label for="nama" class="block text-gray-700">Nama</label>
            <input 
                type="text" 
                id="nama" 
                name="nama" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Nama Admin"
                required
            />
        </div>
        <div>
            <label for="role" class="block text-gray-700">Role</label>
            <select 
                id="role" 
                name="role" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                required
            >
                <option value="Super Admin">Super Admin</option>
                <option value="Admin Biasa">Admin Biasa</option>
            </select>
        </div>
        <div>
            <label for="username" class="block text-gray-700">Username</label>
            <input 
                type="text" 
                id="username" 
                name="username" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Username"
                required
            />
        </div>
        <div>
            <label for="password" class="block text-gray-700">Password</label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                class="border border-gray-300 rounded-md px-4 py-2 w-full focus:ring-2 focus:ring-green-400"
                placeholder="Masukkan Password"
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
