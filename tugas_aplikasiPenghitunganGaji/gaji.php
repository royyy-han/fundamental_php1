<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Perusahaan CV. Tekno Nusa</title>
</head>
<body>
    <?php
    if(isset($_POST ['send'])){
    $gajiBulanan = floatval($_POST['total_gaji_perbulan']);
    $npwp = $_POST['npwp'];    
    $gajiTahunan = $gajiBulanan * 12;

    if ($gajiTahunan > 54000000) {
        if ($npwp == 'iya') {
            $potonganPajak = $gajiTahunan * 0.15;
            $pajak = 0;
        } else {
            $potonganPajak = $gajiTahunan * 0.20;
            $pajak = 0;
        } 
        } else {
            $potonganPajak = 0;
    }
    $gajiBersihBulanan = ($gajiTahunan - $potonganPajak) / 12;
    $gajiPotonganBulanan = $potonganPajak / 12;
    $gajiKotorBulanan = $gajiTahunan / 12;
    } ?>
    <table class="hujan"border=1 style="border-collapse : collapse : width : 50%">
    <tr>
        <td>NAMA KARYAWAN</td>
        <td>:</td>
        <td> 
            <?= $_POST['nama'] ?>
        </td>
    </tr>
    <tr>
        <td>DIVISI</td>
        <td>:</td>
        <td>
            <?= $_POST['divisi'] ?>
        </td>
    </tr>
    <tr>
        <td>TOTAL GAJI PERBULAN</td>
        <td>:</td>
        <td>
            <?= $_POST['total_gaji_perbulan'] ?>
        </td>
    </tr>
    <tr>
        <td>NPWP</td>
        <td>:</td>
        <td>
            <?= $_POST['npwp'] ?>
        </td>
    </tr>
    <tr>
        <td>GAJI KOTOR PERTAHUNNYA</td>
        <td>:</td>
        <td>
            <?= number_format ($gajiTahunan, 0, ',','.') ?>
        </td>
    <tr>
        <td>POTONGAN PAJAK BULANAN</td>
        <td>:</td>
        <td>
            <?= number_format ($gajiPotonganBulanan, 0, ',', '.') ?>
        </td>
    </tr>
    <tr>
        <td> GAJI BERSIH PERTAHUNNYA</td>
        <td>:</td>
        <td>
            <?= number_format ($gajiBersihBulanan, 0, ',', '.') ?>
        </td>
    </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>      
</body>
</html>