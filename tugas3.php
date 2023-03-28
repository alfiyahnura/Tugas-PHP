<?php 
$m1 = ['NIM'=>'202053125', 'nama'=>'Alfiyah', 'nilai'=>95];
$m2 = ['NIM'=>'202053165', 'nama'=>'Fauziah', 'nilai'=>70];
$m3 = ['NIM'=>'202053092', 'nama'=>'Dinda', 'nilai'=>50];
$m4 = ['NIM'=>'202053109', 'nama'=>'Hasnan', 'nilai'=>40];
$m5 = ['NIM'=>'202053100', 'nama'=>'Hidayah', 'nilai'=>90];
$m6 = ['NIM'=>'202053065', 'nama'=>'Alghozali', 'nilai'=>75];
$m7 = ['NIM'=>'202053152', 'nama'=>'Hening', 'nilai'=>30];
$m8 = ['NIM'=>'202053135', 'nama'=>'April', 'nilai'=>85];
$m9 = ['NIM'=>'202053135', 'nama'=>'Rizky', 'nilai'=>75];
$m10 = ['NIM'=>'202053135', 'nama'=>'Zulfia', 'nilai'=>75];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];
$jumlah_mahasiswa = count($mahasiswa);
$jml_nilai = array_column($mahasiswa,'nilai');
$total = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai = min($jml_nilai);
$rata = $total/$jumlah_mahasiswa;
$keterangan = [
    'Jumlah Mahasiswa'=>$jumlah_mahasiswa,
    'Nilai Tertinggi'=>$max_nilai,
    'Nilai Terendah'=>$min_nilai,
    'Rata-Rata'=>$rata
]
?>

<table border="1px" width="100%" bgcolor="orange">
<thead>
    
    <tr>
    <?php 
    foreach($ar_judul as $judul){
        ?>
        <th><?= $judul ?></th>
        <?php }?>
    </tr>

</thead>
<tbody>
<?php
$no = 1;
foreach($mahasiswa as $mhs){
$warna = $no % 2 == 1 ? 'yellow' : 'yellow';
$ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak lulus';
//grade 
if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
else if ($mhs['nilai']>= 75 && $mhs['nilai'] < 80) $grade = 'B';
else if ($mhs['nilai']>= 60 && $mhs['nilai'] < 74) $grade = 'C';
else if ($mhs['nilai']>= 30 && $mhs['nilai'] < 59) $grade = 'D';
else if ($mhs['nilai']>= 0 && $mhs['nilai'] < 29) $grade = 'E';
else $grade = '';

switch ($grade){
    case "A" : $predikat = "memuaskan"; break;
    case "B" : $predikat = "Bagus"; break;
    case "C" : $predikat = "Cukup"; break;
    case "D" : $predikat = "Kurang"; break;
    case "E" : $predikat = "Buruk"; break;
    default: $predikat ="";
}
    ?>
    <tr>
        <tr bgcolor="<?= $warna; ?>">
        <td><?= $no ?> </td>
        <td><?= $mhs['NIM']?></td>
        <td><?= $mhs['nama']?></td>
        <td><?= $mhs['nilai']?></td>
        <td><?= $ket ?></td>
        <td><?= $grade ?></td>
        <td><?= $predikat ?></td>
</tr>
<?php $no++; } ?>
</tbody>
<tfoot>
    <?php
    foreach($keterangan as $ket =>$hasil){
?>
<tr>
    <th colspan="6"><?= $ket ?></th>
    <th><?= $hasil ?></th>

    </tr>
<?php } ?>
</tfoot>
</table>