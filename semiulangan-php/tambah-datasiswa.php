<h1>Tambah Data</h1>
<form action="tambah-datasiswa.php" method="POST">
    <label for="nis">nomor induk siswa</label>
    <input type="number" name="nis" placeholder="12000123"/> <br>

    <label for="nama">Nama lengkap</label>
    <input type="text" name="namalengkap" placeholder="Ex. david lufti"/> <br>
    
    <label for="kelas">kelas</label>
    <input type="text" name="kelas"/> <br>

    <label for="kehadiran">Nilai kehadiran</label>
    <input type="number" name="kehadiran" placeholder="12"/> <br>
    
    <label for="tugas">Nilai tugas</label>
    <input type="number" name="tugas" placeholder="12"/> <br>
    
    <label for="UTS">Nilai UTS</label>
    <input type="number" name="UTS" placeholder="12"/> <br>
    
    <label for="UAS"> Nilai UAS</label>
    <input type="number" name="UAS" placeholder="12"/> <br>

    <input type="submit" name="simpan" value="Simpan Data"/>
    <a href="input-datasiswa.php" class="href">kembali</a>
    
</form>
<?php
    if( isset ($_POST["simpan"])) {
        $nis = $_POST["nis"];
        $nama = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $UTS = $_POST["UTS"];
        $UAS = $_POST["UAS"];
    
    //create menambahkan ke database
    $query ="
        INSERT INTO siswa_nilai VALUES ('$nis', '$nama', '$kelas', '$kehadiran','$tugas','$UTS','$UAS');
    ";
    include ('./input-config.php');
    $insert = mysqli_query ($mysqli, $query);

    if ($insert){
        echo"
            <script>
                alert ('data berhasil ditambahkan');
                window.location='input-datadiri.php;
            </script>
        ";
    }
    }
?>
