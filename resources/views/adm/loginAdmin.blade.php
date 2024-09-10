@extends('loginLayout.loginLayout')

@section('content')
    <form action="{{ $loginRoute }}" method="POST">
        @csrf

        <div class="mb-4">
            <input id="username" type="text" name="username" placeholder="Username" class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" required>
        </div>

        <div class="mb-6">
            <input id="password" type="password" name="password" placeholder="Password" class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" required>
        </div>

        <div class="flex items-center justify-between mb-6">
            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                Login
            </button>
        </div>

        <div class="text-center">
            <a href="#" class="text-sm text-green-600 hover:underline">Lupa Password?</a>
        </div>
    </form>
@endsection
