<?php
if(isset($_POST['proses']))
{
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];

echo "Nim : $nim <br>";
echo "Nama : $nama <br>";
echo "Alamat : $alamat <br>";

echo "Telp: $telp <br>"; 
}
?>