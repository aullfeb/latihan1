<?php
if(isset($_POST['proses']))
{
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];

$hasil= $n1*0.1+$n2*0.2+$n3*0.3+$n4*0.4;

echo "nilai akhir anda adalah : $hasil <br>"; 
}
?>