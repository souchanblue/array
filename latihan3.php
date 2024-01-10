<?php
// contoh array
    $cars = array("Ferrary", "BMW", "Hino" );
    $negara = ["Srilanka", "kutub timur", "Juventus"];
    $kota = array("Singaparna", "Indramayu", "Jepara");


//     echo $cars[0] . ", " . $cars[1] . ", " . $cars[2] . "." ;
//     echo "<br>";
//     var_dump($negara);
//     echo "<br>";
//     print_r($kota);

// menambahkan array
var_dump($kota);
$kota[] = "bogor";
echo"<br>";
var_dump($kota);
$kota[4] = "Depok";
echo"<br>";
var_dump($kota);
?>