<?php
   include('./input-config.php');
   echo "<a href='tambah-datasiswa.php'>Tambah Data</a>";
   echo "<hr>";
    
   //menampilkan data diri databse
   $no = 1;
   $tabledata = "";
   $data = mysqli_query($mysqli, "SELECT * FROM siswa_nilai");
   while($row = mysqli_fetch_array($data)){
   $nilai_akhir=($row["kehadiran"]+$row["tugas"]+$row["UTS"]+$row["UAS"])/4;
    $tabledata .="
        <tr>
            <td>".$row["nis"]. "</td>
            <td>".$row["nama_lengkap"]. "</td>
            <td>".$row["kelas"]. "</td>
            <td>".$row["kehadiran"]. "</td>
            <td>".$row["tugas"]. "</td>
            <td>".$row["UTS"]. "</td>
            <td>".$row["UTS"]. "</td>
            <td>".$nilai_akhir. "</td>
            <td>
            <a href='edit-datasiswa.php?nis=".$row["nis"]."'>Edit</a>
            &nbsp; -&nbsp;
            <a href= 'hapus-datasiswa.php?nis=".$row["nis"]."'
            onclick='return confirm(\"Yakin Hapus ?\");'>Hapus</a>
            </td>
        </tr>
        ";
        $no++;
    }
       
    
     echo "
        <table cellpadding=5 border=1 cellspacing=0>
            <tr>
                <th>nis</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>kehadiran</th>
                <th>tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>nilai akhir</th>
                <th>aksi</th>
            </tr>
            $tabledata
        </table>
           
     ";
?>