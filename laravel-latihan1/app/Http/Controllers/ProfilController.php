<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        
        $data = [
            'nama' => 'Raffaditya Alvaro Wijaya',
            'kelas' => '11 PPLG 2',
            'sekolah' => 'SMK Raden Umar Said',
            'title' => 'Halaman Profil'
        ];

        return view('profil', $data, [
            'title' => 'Profile'
        ]);
    }
}