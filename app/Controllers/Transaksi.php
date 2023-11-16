<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Transaksi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Transaksi',
            'judul' => 'Data Transaksi'
        ];

        return view('transaksi/index', $data);
    }
}
