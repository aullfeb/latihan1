<?php

$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal=$_POST['tanggal'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$jk=$_POST['jeniskelamin'];
$pendidikan=$_POST['pendidikan'];
?>
<h1> DATA REGISTRASI </h1>
<table border=2>
    <tr>
        <td>Nama</td><td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>Alamat</td><td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td>
    </tr>
    <tr>
        <td>Tanggal</td><td><?php echo $tanggal; ?></td>
    </tr>
    <tr>
        <td>Bulan</td><td><?php echo $bulan; ?></td>
    </tr>
    <tr>
        <td>Tahun</td><td><?php echo $tahun; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td><td><?php echo $jk; ?></td>
    </tr>
    <tr>
        <td>Pendidikan</td><td><?php echo $pendidikan; ?></td>
    </tr>
</table>
<a href="registrasi.php"> Back to Home </a>