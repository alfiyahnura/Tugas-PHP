<?php
require 'Pegawai.php';

$pegawai1 = new Pegawai('01111','Alfiyah','Manager','Islam','Menikah');
$pegawai2 = new Pegawai('01112','Dinda','Asisten Manager','Kristen','Belum Menikah');
$pegawai3 = new Pegawai('01113','Dania','Staff','Islam','Belum Menikah');
$pegawai4 = new Pegawai('01114','Hening','Kepala Bagian','Hindu','Menikah');
$pegawai5 = new Pegawai('01115','Fauziah','Asisten Manager','Islam','Belum Menikah');


$ar_pegawai = array($pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5);
foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
?>