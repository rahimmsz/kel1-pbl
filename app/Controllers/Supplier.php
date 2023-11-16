<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Supplier extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Supplier',
            'judul' => 'Data Supplier'
        ];

        return view('supplier/index', $data);
    }

    public function formTambahSupplier()
    {
        $data = [
            'title' => 'Supplier',
            'judul' => 'Form Tambah Supplier'
        ];

        return view('supplier/tambah_supplier', $data);
    }

    public function tambahSupplier()
    {
        $validate = $this->validate([]);;
    }
}
