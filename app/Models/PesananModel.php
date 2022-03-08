<?php
namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends model{
    protected $table='tb_pesanan';
    protected $primary='id';
    protected $allowedFields=['user_id', 'tanggal','total_harga', 'nama_pemesan', 'no_meja'];
}