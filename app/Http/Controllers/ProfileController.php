<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "Sakinah", $npm = "2417051024", $kelas = "B")
    {
        $data = [
            'nama'  => $nama,
            'npm'   => $npm,
            'kelas' => $kelas,
            'foto'  => asset('fotosakinah.png')
        ];

        return view('profile', $data);
    }
}