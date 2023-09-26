<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

     public function profile($nama = "Ika Rahma Alia", $kelas = "CD", $npm = "2117051016", $alamat = "Lampung Barat")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
            'alamat' => $alamat,
        ];
        return view('profile', $data);
    }
}
