<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Prodi;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::take(5)->get();
        $jurusans = jurusan::take(5)->get();
        $prodis = prodi::take(5)->get();
        return view('admin.dashboard', compact('users', 'jurusans','prodis'));
    }


}
