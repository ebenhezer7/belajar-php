<form action="input-datadiri.php" method="POST">
    <label for="nis">nomor induk siswa</label>
    <input type="number" name="nis" placeholder="12000123"/> <br>

    <label for="nama">Nama lengkap</label>
    <input type="text" name="namalengkap" placeholder="Ex. david lufti"/> <br>
    
    <label for="tanggal_lahir">tanggal lahir</label>
    <input type="date" name="tanggal_lahir"/> <br>

    <label for="nilai">nilai</label>
    <input type="number" name="nilai" placeholder="12"/> <br>

    <input type="submit" name="simpan" value="Simpan Data"/>
    
</form>

<?php
   include('./input-config.php');
   echo "<hr>";
    
   //menampilkan data diri databse
   $no = 1;
   $tabledata = "";
   $data = mysqli_query($mysqli, "SELECT * FROM datadirirpl");
   while($row = mysqli_fetch_array($data)){
    $tabledata .="
        <tr>
            <td>".$row["nis"]. "</td>
            <td>".$row["namalengkap"]. "</td>
            <td>".$row["tanggal_lahir"]. "</td>
            <td>".$row["nilai"]. "</td>
        </tr>
        ";
        $no++;
     }
    
     echo "
        <table cellpadding=5 border=1 cellspacing=0>
            <tr>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Nilai</th>
            </tr>
            $tabledata
        </table>
           
     ";
?>