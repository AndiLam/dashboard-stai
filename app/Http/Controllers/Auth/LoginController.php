<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Data login default (sebagai pengganti database)
    protected $mahasiswaUsers = [
        ['nim' => '123456', 'password' => 'password123'],
        ['nim' => '654321', 'password' => 'password654'],
    ];

    protected $dosenUsers = [
        ['nidn' => '987654', 'password' => 'password987'],
        ['nidn' => '456789', 'password' => 'password456'],
    ];

    protected $adminUsers = [
        ['username' => 'admin', 'password' => 'admin123'],
    ];


    public function showMhsLoginForm()
    {
        return view('mhs.loginMhs')->with('loginRoute', route('mhs.loginMhs'));
    }

    public function showDsnLoginForm()
    {
        return view('dsn.loginDsn')->with('loginRoute', route('dsn.loginDsn'));
    }

    public function showAdminLoginForm()
    {
        return view('adm.loginAdmin')->with('loginRoute', route('adm.loginAdmin'));
    }

    // Login Mahasiswa
    public function loginMhs(Request $request)
    {
        $nim = $request->input('nim');
        $password = $request->input('password');

        foreach ($this->mahasiswaUsers as $user) {
            if ($user['nim'] === $nim && $user['password'] === $password) {
                // Arahkan ke dashboard mahasiswa
                return redirect()->route('dashboard')->with('success', 'Login berhasil sebagai Mahasiswa');
            }
        }

        return back()->withErrors(['message' => 'Login gagal, NIM atau Password salah']);
    }

    // Login Dosen
    public function loginDsn(Request $request)
    {
        $nidn = $request->input('nidn');
        $password = $request->input('password');

        foreach ($this->dosenUsers as $user) {
            if ($user['nidn'] === $nidn && $user['password'] === $password) {
                return redirect()->route('dashboardDsn')->with('success', 'Login berhasil sebagai Dosen');
            }
        }

        return back()->withErrors(['message' => 'Login gagal, NIDN atau Password salah']);
    }

    // Login Admin
    public function loginAdmin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        foreach ($this->adminUsers as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return redirect()->route('dashboardAdm')->with('success', 'Login berhasil sebagai Admin');
            }
        }

        return back()->withErrors(['message' => 'Login gagal, Username atau Password salah']);
    }
}

