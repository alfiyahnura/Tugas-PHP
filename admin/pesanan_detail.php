<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);

?>

<div>
<table id="datatablesSimple">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Pelanggan</th>
            <th>Dibayar</th>
        </tr>
    </thead><tbody>
        <?php
        $no = 1;
        foreach($pesanan as $row){
        }
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $pesanan['tanggal'] ?></td>
            <td><?= $pesanan['total'] ?></td>
            <td><?= $pesanan['pelanggan_id'] ?></td>
            <td><?= $pesanan['dibayar'] ?></td>
           </tr>
    </tbody>
</table>
</div>