<br>
<?php
error_reporting(0);
$obj_jenisProduk = new JenisProduk();
$jenis_produk = $obj_jenisProduk->JenisProduk();
$idedit = $_REQUEST['idedit'];
$jen_prod = !empty($idedit) ? $obj_jenisProduk->getJenisProduk($idedit) : array() ;

?>
<form action="jenis_produk_controller.php" method="POST">
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control" value="<?= $jen_prod['nama']?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Keterangan</label> 
        <div class="col-8">
          <input id="ket" name="ket" type="text" class="form-control" value="<?= $jen_prod['ket']?>">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
        <?php

          if(empty($idedit)){

          ?>
          <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
          <?php
          }
          else {
            ?>
            <button name="proses" type="submit" value="ubah" class="btn btn-primary">Update</button>
            <input type="hidden" name="idx" value="<?= $idedit ?>">
            <?php
          }
          ?>
          <button name="proses" type="submit" value="batal" class="btn btn-primary">Cancel</button>
        </div>
      </div>
    </form>