<?php
$id = $_REQUEST['id'];
$model = new JenisProduk();
$jenis_produk = $model->getJenisProduk($id);

?>
<h1 class="mt-4">Detail Jenis Produk</h1>
<div>
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama </th>
                <th>Keterangan</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($jenis_produk as $row){
            }
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $jenis_produk['nama']?></td>
                <td><?= $jenis_produk['ket']?></td>
            </tr>
        </tbody>
    </table>
</div>