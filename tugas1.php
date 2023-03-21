<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus Bangun datar Jajar Genjang</title>
</head>
<body>
    <h1> Bangun Datar Jajar Genjang</h1>

    <form action="" method="post">
        <table border="1">
            <tr>
                <td>Sisi Alas/a</td>
                <td>
                    <input type="text" name="a" require>
                </td>
            </tr>
            <tr>
                <td>Sisi Miring/b</td>
                <td>
                <input type="text" name="b" require>
                </td>
            </tr>
            <tr>
                <td>Tinggi/t</td>
                <td>
                <input type="text" name="tinggi" require>
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
        </table>
    </form>
    <table border="1">
        <?php
        $a=$_POST['a'];
        $b=$_POST['b'];
        $tinggi=$_POST['tinggi'];
        $L= $a * $tinggi;
        $Keliling= 2 * ($a + $b);
        $sisi= ($Keliling / 2) - $a;
        ?>
        <tr>
            <th>Luas Jajar Genjang</th>
            <th>Keliling Jajar Genjang</th>
        </tr>
        <tr>
            <td><?php echo "$a * $tinggi = $L"; ?></td>
            <td><?php echo "2 * ($a + $b) = $Keliling"; ?></td>
            <td><?php echo "($Keliling / 2) - $a = $sisi"; ?></td>
        </tr>
    </table>
    
</body>
</html>