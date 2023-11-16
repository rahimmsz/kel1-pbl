<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id_user';
    protected $allowedFields    = [
        'nama_lengkap',
        'foto_profil',
        'username',
        'password',
        'role'
    ];


    public function getUser($username)
    {
        return $this->where(['username' => $username])->first();
    }
}
