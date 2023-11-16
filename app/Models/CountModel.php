<?php

namespace App\Models;

use CodeIgniter\Model;

class CountModel extends Model
{
    public function countBarang()
    {
        return $this->db->table('barang')->countAll();
    }

    public function countKategori()
    {
        return $this->db->table('kategori')->countAll();
    }
}
