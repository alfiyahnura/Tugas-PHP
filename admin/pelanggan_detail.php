<?php
$id = $_REQUEST['id'];
$model = new Pelanggan();
$pelanggan = $model->getPelanggan($id);

?>
<h1 class="mt-4">Detail Pelanggan</h1>
<div>
<table id="datatablesSimple">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Pelanggan</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Kartu Id</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($pelanggan as $row){
        }
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $pelanggan['kode'] ?></td>
            <td><?= $pelanggan['nama_pelanggan'] ?></td>
            <td><?= $pelanggan['jk'] ?></td>
            <td><?= $pelanggan['tmp_lahir'] ?></td>
            <td><?= $pelanggan['tgl_lahir'] ?></td>
            <td><?= $pelanggan['email'] ?></td>
            <td><?= $pelanggan['kartu_id'] ?></td>
        </tr>
    </tbody>
</table>
</div>