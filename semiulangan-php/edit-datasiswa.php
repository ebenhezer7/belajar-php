<?php
if (isset($_GET["nis"])) {
    $nis = $_GET["nis"];
    $check_nis = "SELECT * FROM siswa_nilai WHERE nis = '$nis';";
    include('./input-config.php');
    $query =  mysqli_query($mysqli, $check_nis);
    $row = mysqli_fetch_array($query);
}
?>

<h1>Edit Data</h1>
<form action="edit-datasiswa.php" method="POST">
    <label for="nis">nomor induk siswa</label>
    <input value="<?php echo $row["nis"] ?>" readonly type="number" name="nis" placeholder="12000123" /> <br>

    <label for="nama">Nama lengkap</label>
    <input value="<?php echo $row["nama_lengkap"] ?>" type="text" name="nama" placeholder="Ex. david lufti" /> <br>

    <label for="kelas">kelas</label>
    <input value="<?php echo $row["kelas"] ?>" type="text" name="kelas" /> <br>

    <label for="kehadiran">nilai kehadiran</label>
    <input value="<?php echo $row["kehadiran"] ?>" type="number" name="kehadiran" placeholder="12" /> <br>

    <label for="tugas">nilai tugas</label>
    <input value="<?php echo $row["tugas"] ?>" type="number" name="tugas" placeholder="12" /> <br>

    <label for="UTS">nilai UTS</label>
    <input value="<?php echo $row["UTS"] ?>" type="number" name="UTS" placeholder="12" /> <br>

    <label for="UAS">nilai UAS</label>
    <input value="<?php echo $row["UAS"] ?>" type="number" name="UAS" placeholder="12" /> <br>

    <input type="submit" name="simpan" value="edit data" />
    <a href="input-datasiswa.php" class="href">kembali</a>

</form>

<?php
    if (isset($_POST["simpan"])) {
        $nis = $_POST["nis"];
        $namalengkap = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $UTS = $_POST["UTS"];
        $UAS = $_POST["UAS"];


        $query = "
            UPDATE siswa_nilai SET nama_lengkap = '$namalengkap',
            kelas = '$kelas',
            kehadiran = '$kehadiran',
            tugas = '$tugas',
            UTS = '$UTS',
            UAS = '$UAS'
            WHERE nis = '$nis';
        ";

        include('./input-config.php');
        $update = mysqli_query($mysqli, $query);

        if ($update) {
            echo "
                <script>
                alert('Data berhasil diperbaharui');
                window.location='input-datasiswa.php';
                </script>
            ";
        } else {
            echo "
                <script>
                alert('Data gagal');
                window.location='edit-datasiswa.php?nis=$nis';
                </script>
            ";
        }
    }

?>