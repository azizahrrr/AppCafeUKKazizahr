<?= $this->extend ('layouts/admin')?>
<?= $this->section('content')?>
<?php
if (session()->getFlashData('success')){
    ?>
    <div class="alert alert-success alert-dismissible fade-show" role="alert">
        <?=session()->getFlashdata('success')?>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">Succes</button>
</div>
<?php
}
?>
<div class="container">
    <h3>Data Menu</h3>
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addMenu">Tambah Data</button>

    <table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jenis</th>
        <th>Stok</th>
        <th>Gambar</th>
        <th>Option</th>
    </thead>
    <tbody>
    <?php
    $no=1;
    foreach ($data as $row):
    ?>
    <tr>
        <td><?=$no?></td>
        <td><?=$row['nama']?></td>
        <td><?=$row['harga']?></td>
        <td><?=$row['jenis']?></td>
        <td><?=$row['stok']?></td>
        <td><?=$row['gambar']?></td>
        <td>
    <a href="#" class="btn btn-warning btn-sm btn-edit" data-toggle="modal" data-target="#editMenu-<?=$row['id']?>">Edit</a>
    <a href="<?= base_url('MenuController/delete/'.$row['id'])?>" onclick="return confirm('yakin akan dihapus')" class="btn btn-danger btn-sm btn-delete">Hapus</a>
    </td>
    </tr>

    <form action="<?= base_url('menu/edit/'.$row['id'])?>" method="post">
    <div class="modal fade" id="editMenu-<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModelLabel">Add Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
    </button>
    </div>
<form action="<?= base_url('menus')?>" method="post">
    <div class="modal-body">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Menu" id="nama" value="<?=$row['nama']?>" required>
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="text" class="form-control" name="harga" placeholder="Harga Menu" id="harga" value="<?=$row['harga']?>" required>
    </div>
    <div class="form-group">
    <label>Jenis Menu</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault" value="makanan" <?=$row['jenis']=="makanan"?"checked":""?>></input>
            <label class="form-check-label" for="flexRadioDefault1">Makanan</label>
    </div>
    <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault" value="minuman" <?=$row['jenis']=="minuman"?"checked":""?>></input>
            <label class="form-check-label" for="flexRadioDefault2">Minuman</label>
    </div>
    <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault" value="cemilan" <?=$row['jenis']=="cemilan"?"checked":""?>></input>
            <label class="form-check-label" for="flexRadioDefault3">Cemilan</label>
    </div>
    </div>
    <div class="form-goup">
        <label>Stok</label>
        <input type="text" class="form-control" name="stok" placeholder="Stok Menu" id="stok" value="<?=$row['stok']?>">
    </div>
    <div class="form-goup">
        <label>Gambar</label>
        <input type="text" class="form-control" name="gambar" placeholder="Gambar Menu" id="gambar" value="<?=$row['gambar']?>">
    </div>
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
    </div>
    </form>
        <?php
        $no++;
        endforeach?>
    </tbody>
    </table>
</div>

<!-- Add product -->
    <div class="modal fade" id="addMenu" tabindex="-1" aria-labelledby="exampleModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModelLabel">Add Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
    </button>
    </div>
<form action="<?= base_url('menus')?>" method="post">
    <div class="modal-body">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Menu">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="text" class="form-control" name="harga" placeholder="Harga Menu">
    </div>
    <div class="form-group">
    <label>Jenis Menu</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault" value="makanan"></input>
            <label class="form-check-label" for="flexRadioDefault1">Makanan</label>
    </div>
    <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault" value="minuman"></input>
            <label class="form-check-label" for="flexRadioDefault2">Minuman</label>
    </div>
    <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault" value="cemilan"></input>
            <label class="form-check-label" for="flexRadioDefault3">Cemilan</label>
    </div>
    </div>
    <div class="form-goup">
        <label>Stok</label>
        <input type="text" class="form-control" name="stok" placeholder="Stok Menu">
    </div>
    <div class="form-goup">
        <label>Gambar</label>
        <input type="text" class="form-control" name="gambar" placeholder="Gambar Menu">
    </div>
    </div>

    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
    </form>
    </div>
    </div>
    
<?= $this->endSection()?>