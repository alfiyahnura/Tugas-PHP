<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrosesan form gaji karyawan</title>
</head>
<body>
    <form method="POST">
        <p> Form input gaji</p>
        <label> Nama </label>
        <input type="text" name="nama" placeholder="Masukan nama"><br>

        <button name="proses" type="submit">Simpan</button>
    </form>
    <?php
        $nama = $_POST ['nama'];
        $tombol = $_POST['proses'];
        $status = "Menikah & anak 4";
        $jabatan = "Manager";

        switch ($jabatan){
            case "Manager" : $gaji = 20000000; break;
            case "Asisten" : $gaji = 15000000; break;
            case "Kabag" : $gaji = 10000000; break;
            case "Staff" : $gaji = 4000000; break;
            default: $gaji ="";
        }
        $tunjangan_jabatan = $gaji / 100 * 20;

        $tunjangan_keluarga = 0;

            if ($status == 'Menikah & anak 1') $tunjangan_keluarga = $gaji / 100 * 5;
            else if ($status == 'Menikah & anak 2') $tunjangan_keluarga = $gaji / 100 * 5;
            else if ($status == 'Menikah & anak 3') $tunjangan_keluarga = $gaji / 100 * 10;
            else if ($status == 'Menikah & anak 4') $tunjangan_keluarga = $gaji / 100 * 10;
            else if ($status == 'Menikah & anak 5') $tunjangan_keluarga = $gaji / 100 * 10;
            else $tunjangan_keluarga = 0;

        $gaji_kotor = $gaji + $tunjangan_jabatan + $tunjangan_keluarga;
        $agama ="Islam";
        $ket = ($gaji_kotor >= 6000000) ? $gaji / 100 * 2.5 : "tida ada zakat";
            if ($agama == 'Islam') $ket;
            else $ket = 'tidak ada zakat';

        $gaji_bersih = $gaji_kotor - $ket;
        if(isset($tombol)){
    ?>
    Nama Pegawai : <?= $nama ?>
    <br> Jabatan : <?= $jabatan ?>
    <br> Gaji Pokok : <?= $gaji ?>
    <br> Tunjangan Jabatan : <?= $tunjangan_jabatan ?>
    <br> Tunjangan Keluarga : <?= $tunjangan_keluarga ?>
    <br> Gaji Kotor : <?= $gaji_kotor ?>
    <br> Agama : <?= $agama ?>
    <br> Zakat Profesi : <?= $ket ?>
    <br> Take Home Pay (Gaji Bersih) : <?= $gaji_bersih ?>

    <?php } ?>
    
</body>
</html>