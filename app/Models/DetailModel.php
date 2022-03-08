<?php
namespace App\Models;

use CodeIgniter\Model;

class DetailModel extends model{
    protected $table='tb_detail_pesanan';
    protected $primary='id';
    protected $allowedFields=['pesanan_id', 'menu_id', 'jumlah'];
}