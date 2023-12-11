<form action=""method="post">
Nama : <input type="text" name="nama"> <br>
Alamat : <input type="text" name="alamat"> <br>
Telp :  <input type="text" name="telp"> <br>

<input type="submit" value="proses data" name="proses">
</form>

<hr>

<?php
if(isset($_POST['proses']))
{
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];

echo "Nama : $nama <br>";
echo "Alamat : $alamat <br>";
echo "Telp: $telp <br>"; 
}
?>