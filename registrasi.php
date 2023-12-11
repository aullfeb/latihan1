<form action="output_registrasi.php"method="post">
ISI FORUM BIODATA:<hr>
Nama : <input type="text" name="nama"> <br>
Alamat : <textarea name="alamat"></textarea><br>
Tempat lahir : <input type="text" name="tempat_lahir"><br>
Tanggal lahir:
<select name="tanggal" required>
    <?php 
    ///perulangan untuk tanggal dari 1 hingga 31
    for ($tanggal=1;$tanggal <=31;$tanggal++){
        echo "<option value=".$tanggal.">".$tanggal."</option>";
    }
    ?>
</select>
<select id="bulan" name="bulan" required>
    <?php 
    ///perulangan untuk bulan dari 1 hingga 12
    for ($bulan=1;$bulan <=12;$bulan++)
    {
        echo "<option value=".$bulan.">".$bulan."</option>";
    }
    ?>
</select>
<select id="tahun" name="tahun" required>
    <?php 
    ///perulangan untuk tahun dari 1950 hingga 2023
    for ($tahun=1950; $tahun <=2023;$tahun++)
    {
        echo "tahun";
        echo "<option value=".$tahun.">".$tahun."</option>";
    }
    ?>
</select><br>
Jenis Kelamin : <input type="radio" name="jeniskelamin" value="L">Laki-laki
                <input type="radio" name="jeniskelamin" value="P">Perempuan<br>
Pendidikan <select name="pendidikan">
    <option value="SMA">SMA</option>
    <option value="S1">S1</option>
    <option value="S2">S2</option>
    <option value="S3">S3</option>
</select><br>

<input type="submit" name="simpan" value="proses">
<input type="reset" name="" value="batal">
</form>