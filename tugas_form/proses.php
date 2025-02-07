<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>royhan</title>
</head>
<body>
    <?php
    if(isset($_POST['input_data']))
    
?>
  <table>
    <tr>
        <td>NISN</td>
        <td>:</td>
        <td>
            <?= $_POST['nisn'] ?>
        </td>
    </tr>
    <tr>
        <td>NAMA LENGKAP</td>
        <td>:</td>
        <td>
            <?= $_POST['username'] ?>
        </td>
    </tr>
    <tr>
        <td>TEMPAT LAHIR</td>
        <td>:</td>
        <td>
            <?= $_POST['tempat_lahir'] ?>
        </td>
    </tr>
    <tr>
        <td>TANGGAL LAHIR</td>
        <td>:</td>
        <td>
            <?= $_POST['tanggal_lahir'] ?>
        </td>
    </tr>
    <tr>
        <td>GENDER</td>
        <td>:</td>
        <td>
            <?= $_POST['jenis_kelamin'] ?>
        </td>   
    </tr>
    <tr>
        <td>AGAMA</td>
        <td>:</td>
        <td>
            <?= $_POST['agama'] ?>
        </td>
    </tr>
    <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td>
            <?= $_POST['alamat'] ?>
        </td>
    </tr>
    <tr>
        <td>ASAL SEKOLAH</td>
        <td>:</td>
        <td>
            <?= $_POST['asal_sekolah'] ?>
        </td>
    </tr>
    <tr>
        <td>PILIHAN JURUSAN 1</td>
        <td>:</td>
        <td>
            <?= $_POST['pilihan_jurusan1'] ?>
        </td>
    </tr>
    <tr>
        <td>PILIHAN JURUSAN 2</td>
        <td>:</td>
        <td>
            <?= $_POST['pilihan_jurusan2'] ?>
        </td>
    </tr>
    <tr>
        <td>EXTRA YANG DIMINATI</td>
        <td>:</td>
        <td>
        <?= implode(",", $_POST['ekskul']); ?>
        </td>
    </tr>
    <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td>
            <?= $_POST['alamat'] ?>
        </td>
    </tr>

<td>
   
</td>
  </table>


    
    
</body>
</html>