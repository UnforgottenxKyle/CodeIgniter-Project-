<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'tb_users';
    protected $primaryKey = 'id';
    protected $userAutoIncrement = true;
    protected $allowedFields = [
        'first_name',
        'last_name',
    ];
}