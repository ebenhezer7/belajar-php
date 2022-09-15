<form action="input_siswa.php" method="POST">
    <label for="nis">nomor induk siswa</label>
    <input type="number" name="nis" placeholder="12000123"/> <br>

    <label for="nama">Nama lengkap</label>
    <input type="text" name="nama" placeholder="Ex. david lufti"/> <br>

    <label for="jk">jenis kelamin</label>
    <input type="radio" name="jk" value="L"/> laki-laki
    <input type="radio" name="jk" value="P"/> perempuan <br>

    <label for="kelas">kelas</label>
    <select name="kelas">
        <option>10 rpl 1</option>
        <option>10 rpl 2</option>
        <option>11 rpl 1</option>
        <option>11 rpl 2</option>
        <option>12 rpl 1</option>
        <option>12 rpl 2</option>
    </select> <br>
    
    <label for="tanggal lahir">tanggal lahir</label>
    <input type="date" name="tanggal_lahir"/> <br>

    <label for="alamat">alamat</label>
    <textarea name="alamat" placeholder="Ex. 31. Arief rahman" ></textarea> <br>

    <label for="nilai">nilai</label>
    <input type="number" name="nilai" placeholder="12"/> <br>

    <input type="submit" name="simpan" value="Simpan Data"/>
    <input type="reset" name="reset" value="reset input"/>
</form>

<?php
    if(isset($_POST["simpan"])) {
        echo "<hr>";

        //deklarassi variabel 
        $nis = $_POST["nis"];
        $namalengkap = $_POST["nama"];
        $jeniskelamin = $_POST["jk"];
        $kelas = $_POST["kelas"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $alamat = $_POST["alamat"];
        $nilai = $_POST["nilai"];
        
        //tampil data variable
        echo "
            hasil inputan sebagai berikut: <br>
            nomor induk siswa : $nis <br>
            nama lengkap : $namalengkap <br>
            jenis kelamin : $jeniskelamin <br>
            kelas : $kelas <br>
            tanggal lahir : $tanggal_lahir <br>
            alamat : $alamat <br>
            nilai : $nilai <br>
        ";
        
    }     

?>