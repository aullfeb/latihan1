<?php
if(isset($_POST['proses']))
{

$nabar=$_POST['nabar'];
$habar=$_POST['habar'];
$jabar=$_POST['jabar'];
$total=$habar*$jabar; 

echo "Nama barang : $nabar <br>";
echo "Harga barang : $habar <br>";
echo "Jumlah barang : $jabar <br>";
echo "------------------------<br>";
echo "Total = $total <br>"; 
}
?>