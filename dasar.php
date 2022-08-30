<?php
//variabel 
//$1nama; contoh salah (karna diawali angka)
//$#1nama; contoh salah (ada simbol ditengah)
//1nama; contoh salah (tidak ada simbol diawal)
$nama = "eben";
$usia = 16 ;
echo "nama saya $nama <br>";
echo "usia saya $usia tahun <br>";

//tipe data (integer, float, string)
//boolean, array 
$namalengkap = "eben hezer ";
$umur = 16; //integer
$nilai = 85; //float
$jomblo = true ; //boolean (true/false)


//array string
$namarpl1 = array("alya", "dwi", "eben");

echo "nama lengkap : $namalengkap <br>";
echo "umur  : $umur <br>";
echo "nilai : $nilai <br>";
echo "jomblo : $jomblo <br>";
echo "<hr>";
echo "array 0 : $namarpl1[0] <br>";//alya
echo "array 2 : $namarpl1[2] <br>";//eben 
echo "<hr>";
//aritmatiak  (+ - / * %)
echo "angka1: " . $angka1  = 10; echo "<br>";
echo "angka2: " . $angka2  = 5; echo "<br>";
echo "<hr";

echo "tambah :" . $tambah = $angka1 + $angka2 . "<br>";
echo "kurang :" . $kurang = $angka1 - $angka2 ." <br>";
echo "bagi :" . $bagi = $angka1 / $angka2 . "<br>";
echo "kali :" . $kali = $angka1 * $angka2 . "<br>";
echo "sisa bagi :" . $sisabagi = $angka1 % $angka2 . "<hr>";

//operator perbandingan (=, >, <, !=, ==, ===)
$a =  10;
$b = 5;
$c = "10";
echo "== :"; echo $a == $b; echo "<br>";
echo "> :"; echo $a > $b; echo "<br>";
echo "< :"; echo $a < $b; echo "<br>";
echo "!= :"; echo $a != $b; echo "<br>";
echo "=== :"; echo $a === $b; echo "<br>";
echo "<hr>";

//operator logika  (AND, OR, $$, ||)

$x = 10;
$y = 20;
if ($x == 10 AND $y == 20){echo "terpenuhi 2 variable <hr>";}
if ($x == 10 OR $y == 10){echo "salah satu variable terpenuuhi <hr>";}
?>
