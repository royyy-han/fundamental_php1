<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-
scale=1.0">
<title>Form Biodata</title>
</head>
<body>
<form action="proses.php" method="POST">
<fieldset>
<legend><h1>FORM BIODATA </h1> </legend>
<p>
<label>NISN :</label>
<input type="number" name="nisn" placeholder="MASUKKAN NISN ANDA">
</p>
<p>
<label>NAMA LENGKAP :</label>
<input type="text" name="username" placeholder="MASUKKAN NAMA ANDA">
</p>
<p>
<label>TEMPAT LAHIR :</label>
<input type="text" name="tempat_lahir" placeholder="MASUKKAN TEMPAT LAHIR ANDA">
</p>
<p>
<label>TANGGAL LAHIR :</label>
<input type="date" name="tanggal_lahir">
</p>
<p>
<label>GENDER :</label>
<input type="radio" name="jenis_kelamin" value="lAKI-LAKI">LAKI- LAKI
<input type="radio" name="jenis_kelamin" value="PEREMPUAN">PEREMPUAN
</p>
<p>
<label>AGAMA :</label>
<select name="agama">
<option value="PILIH AGAMA ANDA">PILIH AGAMA ANDA </option>
<option value="budha">Budha</option>
<option value="hindu">Hindu</option>
<option value="islam">Islam</option>
<option value="kristen">Kristen </option>
<option value="konghucu">Konghucu</option>
<option value="Katolik"> Katolik</option>
</select>
</p>
<p>
<label>ALAMAT :</label>
<br />
<textarea name="alamat" id="ALAMAT" cols="30" rows="10"></textarea>
</p>
<p>
<label>ASAL SEKOLAH :</label>
<input type="ASAL SEKOLAH" name="asal_sekolah" placeholder="MASUKKAN NAMA SEKOLAH ANDA">
</p>
<p>
<label>PILIHAN JURUSAN 1 :</label>
<select name="pilihan_jurusan1" id="PILIHAN JURUSAN 1">
    <option value="TIDAK MEMILIH JURUSAN"> PILIH JURUSAN ANDA</option>
    <option value="PPLG"> PENGEMBANGAN PERANGKAT LUNAK & GIM</option>
    <option value="TJKT"> TEKHNIK JARINGAN KOMPUTER & TELEKOMUNIKASI</option>
    <option value="DKV"> DESAIN KOMUNIKASI VISUAL</option>
    <option value="SP"> SENI PERTUNJUKAN</option>
    <option value="AKEUL"> AKUNTANSI KEUANGAN LEMBAGA</option>
    <option value="MPLB"> MENEJEMEN PERKANTORAN & LAYANAN BISNIS</option>
    <option value="APH">  AKOMODASI PERHOTELAN</option>
    <option value="PM"> PEMASARAN</option>
    <option value="BDP"> BROADCASTING & PERFILMAN</option>    
    <option value="KL"> KULINER</option>
</select>
</P>
<P>
<label>PILIHAN JURUSAN 2 :</label>
<select name="pilihan_jurusan2" id="PILIHAN JURUSAN 2">
    <option value="TIDAK MEMILIH JURUSAN"> PILIH JURUSAN ANDA</option>
    <option value="PPLG"> PENGEMBANGAN PERANGKAT LUNAK & GIM</option>
    <option value="TJKT"> TEKHNIK JARINGAN KOMPUTER & TELEKOMUNIKASI</option>
    <option value="DKV"> DESAIN KOMUNIKASI VISUAL</option>
    <option value="SP"> SENI PERTUNJUKAN</option>
    <option value="AKEUL"> AKUNTANSI KEUANGAN LEMBAGA</option>
    <option value="MPLB"> MENEJEMEN PERKANTORAN & LAYANAN BISNIS</option>
    <option value="APH">  AKOMODASI PERHOTELAN</option>
    <option value="PM"> PEMASARAN</option>
    <option value="BDP"> BROADCASTING & PERFILMAN</option>    
    <option value="KL"> KULINER</option>
</select>
</p>
<p>
    EXTRA YANG DIMINATI: <label for="EXTRA"  name="extrakulikuler"></label> <br />
    <input type="checkbox" value="EC" name="ekskul[]"> ENGLISH CLUB ESEMKASA <br />
    <input type="checkbox" value="BASKET" name="ekskul[]"> BASKET <br />
    <input type="checkbox" value="VOLI" name="ekskul[]"> VOLI <br />
    <input type="checkbox" value="DA" name="ekskul[]"> DEWAN AMBALAN <br />
    <input type="checkbox" value="PA" name="ekskul[]"> PECINTA ALAM <br />
    <input type="checkbox" value="FS" name="ekskul[]"> FUTSAL <br />
    <input type="checkbox" value="PB" name="ekskul[]"> PASKIB <br />
    <input type="checkbox" value="LH" name="ekskul[]"> LASKAR HIJAU <br />
    <input type="checkbox" value="GDS" name="ekskul[]"> GERAKAN DISIPLIN SEKOLAH <br />
    <input type="checkbox" value="OSIS" name="ekskul[]"> ORGANISASI SISWA INTRA SEKOLAH <br />
</p>
<p>
<input type="submit" name="input_data" value="INPUT DATA">
</p>
</fieldset>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>