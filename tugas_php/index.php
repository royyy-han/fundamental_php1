<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    define('GAJI',5000000 ); 
    define('BONUS',500000);
    define('PAJAK',0.12);
    
    $jumlah_proyek = 1;
    $total_gaji;
    $gaji_bersih;

    $jumlah_proyek *= BONUS;
    $total_gaji = GAJI + $jumlah_proyek;
    $total_pajak = $total_gaji * PAJAK;
    $gaji_bersih = $total_gaji - $total_pajak;

    echo "bonus anda $jumlah_proyek <br/>";
    echo "total gaji anda ditambah dengan bonus $total_gaji <br/>";
    echo "pajak anda $total_pajak <br/>";
    echo "total gaji bersih anda $gaji_bersih";
    ?>
    












</body>
</html>