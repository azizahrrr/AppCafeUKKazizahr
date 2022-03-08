<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends model{
    protected $table='tb_user';
    protected $primary='id';
    protected $allowedFields=['nama', 'username', 'password', 'role'];
}