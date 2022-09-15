<?php
    //materi percabangan (if-else)
    $nilai = 78;
    echo "nilai kamu adalah $nilai <br>";
    echo "maka status kamu = ";

    if ($nilai > 78){
        echo "lulus beneran";
    } else if ($nilai == 78) {
        echo "lulus kkm";
    }
    else {
        echo "tidak lulus";
    }
    echo "<hr>";


    $nilai_web = 82;
    $nilai_pbo = 77;
    echo "NILAI WEB KAMU = $nilai_web <br>";
    echo "NILAI PBO KAMU = $nilai_pbo <br>";
    echo "kelulusan kamu = ";
    if ($nilai_web >= 80 AND $nilai_pbo >= 80){
        echo "lulus 2 mapel produktif ";
    } else if ($nilai_web >= 80 or $nilai_pbo >= 80) {
        if ($nilai_web >= 80 ){
            echo "lulus mapel WEB <br>";
        } 
        if ($nilai_pbo >= 80 ){
            echo " lulus mapel PBO ";
        }
        echo "lulus mapel produktif";
    }
    
    else {
        echo "tidak lulus mapel produktif";
    }
    echo "<hr>";

    //materi pengulangan (WHILE, DO WHILE, FOR)
    $i = 1;
    while($i <= 5){
        echo "hello world !  $i<br>";
        $i++; //assigment +1 
    }
    echo "<hr>";
    $j = 1;
    do {
        echo $j . "<br>";
        $j ++ ;
    }while ($j <= 5);
    echo "<hr>";

    $k = 1;
    for ($k = 10; $k >=1; $k--) {
        echo $k . "<br>";
    }
    echo "<hr>";
    for ($x = 9; $x >= 1; $x--){
        for ($y = 1; $y <= $x; $y++){
            echo $y;
            
        }
        echo "<br>";
    }
    echo "<hr>";

    for ($z = 1; $z <= 10; $z++) {
        if ($z % 2 == 0){
            echo $z. " genap <br>";
        } else {
            echo $z . " ganjil <br>";
        }


    }


    
?>   