<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BarangKeluar extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Barang Keluar',
            'judul' => 'Data Barang Keluar'
        ];

        return view('barang_keluar/index', $data);
    }
}
