<br>
<?php
$obj_jenisProduk = new JenisProduk();
$jenis_produk = $obj_jenisProduk->JenisProduk();

?>
<form action="jenis_produk_controller.php" method="POST">
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Keterangan</label> 
        <div class="col-8">
          <input id="ket" name="ket" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>