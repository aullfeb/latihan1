<form action=""method="post">
input nilai : <input type="int" name="nilai"> <br>

<input type="submit" value="proses data" name="proses">
</form>

<head>
    <title>CONTOH IF MAJEMUK</title>
</head>

<body>
<?php
if(isset($_POST['proses']))
{
    $nilai=$_POST['nilai'];
    if ($nilai >=85)
        {$grade="A";}
    elseif($nilai >=75)
        {$grade="B";}
    elseif($nilai >=60)
        {$grade="C";}
    elseif($nilai >=50)
        {$grade="D";}
    elseif($nilai >=0)
        {$grade="E";}
    else
        {$grade="Nilai anda diluar jangkauan";}
        echo "nilai anda : $nilai, dikonversi menjadi $grade ";
}
?>
</body>