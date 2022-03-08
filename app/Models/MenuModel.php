<?php
namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends model{
    protected $table='tb_menu';
    protected $primary='id';
    protected $allowedFields=['nama', 'harga', 'jenis', 'stok', 'gambar'];
}