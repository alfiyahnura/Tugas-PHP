<?php
$id = $_REQUEST['id'];
$model = new Produk();
$produk = $model->getProduk($id);

?>

<div>
<table id="datatablesSimple">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Minimal Stok</th>
            <th>Jenis Produk </th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($produk as $row){
        }
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $produk['kode']?></td>
            <td><?= $produk['nama']?></td>
            <td><?= $produk['harga_beli']?></td>
            <td><?= $produk['harga_jual']?></td>
            <td><?= $produk['stok']?></td>
            <td><?= $produk['min_stok']?></td>
            <td><?= $produk['jenis_produk_id']?></td>
        </tr>
    </tbody>
</table>
</div>