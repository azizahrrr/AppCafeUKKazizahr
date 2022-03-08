<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MenuModel;

class MenuController extends Controller {
    /**
     * Instance of the main Request object.
     * 
     * @var HTTP\
     * 
     */
    protected $request;
    function __construct()
    {
        $this->menus = new MenuModel();
    }
    public function tampil()
    {
      //  $menu=new MenuModel();
        // $data['pesan']="data menu";
        $data['data']=$this->menus->findAll();
        return view('MenuList',$data);
    }
    public function simpan()
    {
        #code...
        $data = array(
            'nama'=>$this->request->getPost('nama'),
            'harga'=>$this->request->getPost('harga'),
            'jenis'=>$this->request->getPost('jenis'),
            'stok'=>$this->request->getPost('stok'),
            'gambar'=>$this->request->getPost('gambar'),

        );
        $this->menus->insert($data);
        return redirect('menu')->with('success','Data Berhasil Disimpan');
    }
    public function delete($id)
    {
        #code...
        $this->menus->delete($id);
        return redirect('menu')->with('success','Data Berhasil Dihapus');

    }
    public function edit($id)
    {
$pass = $this->request->getPost('nama');
if(empty($pass)){
    $data = array(
        'harga'=>$this->request->getPost('harga'),
        'jenis'=>$this->request->getPost('jenis'),
        'stok'=>$this->request->getPost('stok'),
        'gambar'=>$this->request->getPost('gambar'),
    );
    }else{
        $data = array(
            'nama'=>$this->request->getPost('nama'),
            'harga'=>$this->request->getPost('harga'),
            'jenis'=>$this->request->getPost('jenis'),
            'stok'=>$this->request->getPost('stok'),
            'gambar'=>$this->request->getPost('gambar'),
        );
        $this->menus->update($id,$data);
        return redirect('menu')->with('success', 'Data Berhasil Diedit');
    }
    }
}

