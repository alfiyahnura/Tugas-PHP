<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran();
  echo '<br>'.$lingkaran->namaBidang() . "<br>";
  echo 'Luas Bidang = '.$lingkaran->luasBidang() . "<br>";
  echo 'Keliling Bidang = '.$lingkaran->kelilingBidang() . "<br>";

$persegiPanjang = new PersegiPanjang();
  echo '<br>'.$persegiPanjang->namaBidang() . "<br>";
  echo 'Luas Bidang = '.$persegiPanjang->luasBidang() . "<br>";
  echo 'Keliling Bidang = '.$persegiPanjang->kelilingBidang() . "<br>";

$segitiga = new Segitiga();
  echo '<br>'.$segitiga->namaBidang() . "<br>";
  echo 'Luas Bidang = '.$segitiga->luasBidang() . "<br>";
  echo 'Keliling Bidang = '.$segitiga->kelilingBidang() . "<br>";

?>