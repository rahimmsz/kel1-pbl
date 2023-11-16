<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BarangMasuk extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Barang Masuk',
            'judul' => 'Data Barang Masuk'
        ];

        return view('barang_masuk/index', $data);
    }
}
