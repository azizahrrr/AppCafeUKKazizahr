<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PesananModel;

class LaporanController extends Controller {
    function __construct()
    {
        $this->Laporan = new PesananModel();
    }
    public function tampil()
    {
        #code... 
        $data ['data']= $this->Laporan->findAll();
        return view('Laporan', $data);
    }
}