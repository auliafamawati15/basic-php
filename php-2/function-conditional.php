<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>

<?php

echo "<h3>Soal No 1 Greetings</h3>";

/*
Soal No 1
Greetings
*/

// Function Greetings
function greetings($nama){
    echo "Halo " . ucfirst($nama) . ", Selamat Datang di Jabar Coding Camp!<br>";
}

// Menjalankan Function
greetings("Aulia");
greetings("Azizah");
greetings("Amanda");


echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";

/*
Soal No 2
Reverse String
*/

// Function Reverse String
function reverseString($kata){
    $hasil = "";

    for($i = strlen($kata)-1; $i >= 0; $i--){
        $hasil .= $kata[$i];
    }

    echo $hasil . "<br>";
}

// Menjalankan Function
reverseString("Aulia");
reverseString("Azizah");
reverseString("Amanda");


echo "<br>";

echo "<h3>Soal No 3 Palindrome</h3>";

/*
Soal No 3
Palindrome
*/

// Function Palindrome
function palindrome($kata){

    $balik = "";

    for($i = strlen($kata)-1; $i >= 0; $i--){
        $balik .= $kata[$i];
    }

    if($kata == $balik){
        echo "true<br>";
    }else{
        echo "false<br>";
    }
}

// Menjalankan Function
palindrome("civic");
palindrome("nababan");
palindrome("jambaban");
palindrome("racecar");


echo "<br>";

echo "<h3>Soal No 4 Tentukan Nilai</h3>";

/*
Soal No 4
Tentukan Nilai
*/

// Function Tentukan Nilai
function tentukan_nilai($nilai){

    if($nilai >= 85 && $nilai <= 100){
        return "Sangat Baik";
    }elseif($nilai >= 70 && $nilai < 85){
        return "Baik";
    }elseif($nilai >= 60 && $nilai < 70){
        return "Cukup";
    }else{
        return "Kurang";
    }

}

// Menjalankan Function
echo tentukan_nilai(98);
echo "<br>";

echo tentukan_nilai(76);
echo "<br>";

echo tentukan_nilai(67);
echo "<br>";

echo tentukan_nilai(43);
echo "<br>";

?>

</body>

</html>