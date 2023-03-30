<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];

$ar_skill = ["HTML"=>10,"CSS"=>10, "Javascript"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "MySQL"=>30,"Laravel"=>40];
?>
<fieldset style="background-color:aquamarine;">
    <legend>Form Registrasi Kelompok Belajar</legend>
<table>
    <thead>
        <tr>
            <th>Form Registrasi</th>
        </tr>
    </thead>
    <tbody>
        <form method="POST">
            <tr>
                <td>NIM : </td>
                <td> 
                    <input type="text" name="nim" >
                </td>
            </tr>
            <tr>
                <td>Nama : </td>
                <td> 
                    <input type="text" name="nama" >
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin : </td>
                <td> 
                    <input type="radio" name="jk" value="Laki-laki" >Laki-Laki &nbsp;
                    <input type="radio" name="jk" value="Laki-laki" >Perempuan 
                </td>
            </tr>
            <tr>
                <td>Program Studi: </td>
                <td> 
                    <select name="prodi">
                        <?php 

                        foreach($ar_prodi as $prodi => $v){
                            ?>
                            <option value="<?= $prodi ?>"><?= $v ?></option>
                       <?php } ?>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Skill Programming : </td>
                <td> 
                    <?php 
                    foreach ($ar_skill as $skill => $s){
                        ?>
                    <input type="checkbox" name="skill[]" value="<?= $skill ?>" ><?= $skill ?>

                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Skor Skill : </td>
                <td> 
                <input type="text" name="skor" placeholder="masukan skor anda">
                </td>
            </tr>
            <tr>
                <td>Email: </td>
                <td> 
                    <input type="text" name="email" placeholder="masukan email anda">
                </td>
            </tr>
            <tfoot>
                <tr>
                    <th colspan="2">
                        <button name="proses">Submit</button>
                    </th>
                </tr>
            </tfoot>
    </table>
            

</fieldset>
<?php 
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $skor = $_POST['skor'];
    $email = $_POST['email'];

    if($skor >= 100 && $skor <= 150) $grade = "A";
        else if ($skor >= 60 && $skor <= 99) $grade = "B";
        else if ($skor >= 40 && $skor <= 59) $grade = "C";
        else if ($skor >= 0 && $skor <= 39) $grade = "D";
        else if ($skor <= 0) $grade = "E";
        else $grade = "";

        switch ($grade){
            case "A" : $predikat = "Sangat Baik"; break;
            case "B" : $predikat = "Baik"; break;
            case "C" : $predikat = "Cukup"; break;
            case "D" : $predikat = "Kurang"; break;
            case "E" : $predikat = "Tidak Memadai"; break;
            default: $predikat ="";
        }
}

?>
NIM : <?= $nim ?><br>
Nama : <?= $nama ?><br>
Jenis Kelamin : <?= $jk ?><br>
Program Studi : <?= $prodi ?><br>
Skill :
<?php 
foreach($skill as $s){ ?>
<?= $s ?> ,
<?php } ?><br>
Skor Skill : <?= $skor ?><br>
Kategori Skill : <?= $predikat ?><br>
Email : <?= $email ?><br>