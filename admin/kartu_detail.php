<?php
$id = $_REQUEST['id'];
$model = new Kartu();
$kartu = $model->getKartu($id);

?>
<h1 class="mt-4">Detail Kartu</h1>
<div>
    <table id="datatablesSimple">
        <thead>
            <tr>
            <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Diskon</th>
                <th>Iuran</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($kartu as $row){

            }
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $kartu['kode'] ?></td>
                <td><?= $kartu['nama'] ?></td>
                <td><?= $kartu['diskon'] ?></td>
                <td><?= $kartu['iuran'] ?></td>
            </tr>
        </tbody>
    </table>
</div>