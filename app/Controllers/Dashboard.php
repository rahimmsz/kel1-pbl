<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CountModel;

class Dashboard extends BaseController
{
    protected $countModel;

    public function __construct()
    {
        $this->countModel = new CountModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'judul' => 'Dashboard',
            'countBarang' => $this->countModel->countBarang(),
            'countKategori' => $this->countModel->countKategori()
        ];

        return view('dashboard/index', $data);
    }
}
