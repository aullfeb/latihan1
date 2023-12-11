<html>
<html>
<table border = 2> 
<form method="post" action="">

    <h1>Rumus - Rumus</h1> 

    <tr>
    <td> <label for="nilai1">Nilai 1</label> </td>
    <td> <input type="text" name="nilai1" id="nilai1"></td>
    </tr>
    <tr>
    <td><label for="nilai2">Nilai 2</label></td>
    <td><input type="text" name="nilai2" id="nilai2"></td>
    </tr>
    <tr>
    <td colspan="2", style="text-align:center;"><input type="radio" name="aritmatika" value="segitiga">Segitiga<br>
                    <style="text-align:center;"><input type="radio" name="aritmatika" value="persegi_panjang">Persegi Panjang<br></td>
                    </tr>
    <tr>
    <td><input type="submit" name="proses" value="rumus"></td>
    </tr>

</table>

<?php
if (isset($_POST['proses'])) {
    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];

    if(isset($_POST['aritmatika'])) {
        $rumus = $_POST["aritmatika"];

    if (empty($nilai1) || !is_numeric($nilai1)) {
        echo "Tidak ada hasil perhitungan";
    } elseif (empty($nilai2) || !is_numeric($nilai2)) {
        echo "Tidal ada hasil perhitungan";
    } elseif (empty($rumus)) {
        echo "Tidak ada hasil perhitungan";
    } else {
        $hasil = 0;
        if($rumus === "segitiga"){
            $hasil = 0.5 * ($nilai1 * $nilai2);
        } elseif ($rumus === "persegi_panjang"){
            $hasil = $nilai1 * $nilai2;
        }
        if ($hasil !== 0) {
            echo "HASIL HITUNG RUMUS <br><br>";
            echo "Nilai 1 adalah = $nilai1 <br>";
            echo "Nilai 2 adalah = $nilai2 <br>";
            echo "Rumus yang Dipilih adalah = $rumus <br>";
            echo "Hasil Perhitungan Rumus = $hasil <br>";
        } else {
            echo "Tidak ada hasil perhitungan";
        }
    }
    } else {
        echo "Tidak ada hasil perhitungan";
    }
}
?>
</html>