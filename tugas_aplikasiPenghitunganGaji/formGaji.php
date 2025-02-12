<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Perusahaan CV. Tekno Nusa</title>
</head>
<body>
    <form class="hujan" action="gaji.php" method="POST">
        <table border=1 style="border-collapse : collapse : width : 50%">
           <tr>
            <td><h1>Aplikasi Penghitungan Gaji</h1></td>
           </tr>
            <tr>
                <td>NAMA KARYAWAN</td>
                <td>:</td>
                <td>
                    <input type="text"  class="form-control" name="nama" placeholder="masukkan nama anda" required>
                </td>
            </tr>
            <tr>
                 <td>DIVISI DALAM PERUSAHAAN</td>
                 <td>:</td>
                 <td>
                    <input type="text" class="form-control" name="divisi" placeholder="masukkan divisi anda dalam perusahaan" required>
                 </td>
            </tr>
            <tr>
                <td>TOTAL GAJI PERBULAN</td>
                <td>:</td>
                <td>
                    <input type="number"  class="form-control" name="total_gaji_perbulan" placeholder="masukkan total gaji anda perbulan" required>
                </td>
            </tr>
            <tr>
                <td>APAKAH ANDA MEMILIKI NPWP ? (IYA / TIDAK)</td>
                <td>:</td>
                <td>
                    <input type="radio" name="npwp" value="iya">IYA
                    <input type="radio" name="npwp" value="tidak">TIDAK
                </td>
            </tr>
            <tr>
                <td class="tombol"></td>
                <td>
                <button type="submit" name="send">Send</button>
                </td>
            </tr>
            </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>
</html>