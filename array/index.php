<style>*{background-color :#000; color: #fff}</style>
<?php
    //array
    $nama ="rizqi catur";
    echo $nama . "<br>";


    $nama_array = array ("Faris", "Eben", "haikal", "rizki giant", "indra");
    print_r($nama_array); echo "<br>";

    //copas 
    echo $nama_array[0]. "<br>";
    echo $nama_array[1]. "<br>";
    echo $nama_array[2]. "<br>";

    echo "<hr>";

    //versi foreach
    foreach ($nama_array AS $datanama){
        echo $datanama. "<br>";
    }
    
    echo "<hr>";
    //versi for
    for ($i = 0; $i < count($nama_array); $i++){
        echo $nama_array[$i] . "<br>";
    }

    //multiple array
    $kelasrpl1 = array(
        array("rizky catur", "L", "mancing"),
        array("Eben", "L","main bola"),
        array("faris", "L",array ("berenang","main game", "basket")),
        array("volly", array ("main kelereng",array ("main layangan"))),
    );
    
    echo "<pre>";
    print_r($kelasrpl1);
    echo "<pre>";

    echo "<hr>";
    echo $kelasrpl1[1][0] . ",";
    echo $kelasrpl1[2][2][0] . ",";
    echo $kelasrpl1[3][1][1][0] . ",";
    echo $kelasrpl1[0][2] . ",";
    
    echo "<hr>";
    //pertanyaan buat david
    echo $kelasrpl1 [2][0] . "<br>";
    
    //pertanyaan buat egi 
    echo $kelasrpl1 [1][2] . "<br>";
    echo $kelasrpl1 [2][2][1] . "<br>";
    echo $kelasrpl1 [3][1][0] . "<br>";

    //pertanyaan buat syawali
    echo $kelasrpl1 [2][2][2] . "<br>";
    echo $kelasrpl1 [3][1][1][0] . "<br>";

    





?>