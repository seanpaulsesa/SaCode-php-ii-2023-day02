<?php
    /* membuat variabel nilai 
    dengan tipe data boolean
    */
    $nilaiA = true;
    $nilaiB = false;
    $nilaiC = false;

    // menampilkan nilai variabel

    echo "Nilai A : " . $nilaiA . "<br>";
    echo "Nilai B : " . $nilaiB . "<br>";
    echo "Nilai C : " . $nilaiC . "<br>";

    // membuat garis horisontal dengan tag html <hr>
    echo "<hr>";

    // menampilkan tipe dan nilai variabel
    echo var_dump($nilaiA) . "<br>";
    echo var_dump($nilaiB) . "<br>";
    echo var_dump($nilaiC) . "<br>";
    

?>