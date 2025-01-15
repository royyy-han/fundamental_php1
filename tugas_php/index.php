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
    define('BONUS',50000);
    define('PAJAK',0.12)
    
    $jumlah_proyek = 3;
    
    $totalBonus = $BONUS * $jumlahProyekSelesai;
    
    // Menghitung total pendapatan (gaji pokok + bonus)
    $totalPendapatan = $gajiPokok + $totalBonus;
    
    // Menghitung pajak penghasilan (5% dari total pendapatan)
    $pajak = $totalPendapatan * PAJAK_PENGHASILAN;
    
    // Menghitung gaji bersih setelah dikurangi pajak
    $gajiBersih = $totalPendapatan - $pajak;
    
    // Menampilkan hasil perhitungan
    echo "Gaji Pokok: Rp" . number_format($gajiPokok, 0, ',', '.') . "<br>";
    echo "Jumlah Proyek Selesai: " . $jumlahProyekSelesai . " proyek<br>";
    echo "Total Bonus: Rp" . number_format($totalBonus, 0, ',', '.') . "<br>";
    echo "Total Pendapatan: Rp" . number_format($totalPendapatan, 0, ',', '.') . "<br>";
    echo "Pajak Penghasilan (5%): Rp" . number_format($pajak, 0, ',', '.') . "<br>";
    echo "Gaji Bersih: Rp" . number_format($gajiBersih, 0, ',', '.') . "<br>";
    ?>
    












</body>
</html>