<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>

    <?php   
        echo "<h3>Soal No 1</h3>";
        
        $first_sentence = "Hello PHP!" ;
        $second_sentence = "I'm ready for the challenges";
        
        // Jawaban Soal No 1
        echo "Panjang String: " . strlen($first_sentence) . ", jumlah kata:" . str_word_count($first_sentence) . " <b>Dari Kata " . $first_sentence . "</b><br>";
        echo "Panjang String: " . strlen($second_sentence) . ", jumlah kata:" . str_word_count($second_sentence) . " <b>Dari Kata " . $second_sentence . "</b><br>";

        
        echo "<h3>Soal No 2</h3>";
        
        $string2 = "I love PHP";
        
        echo "<label>String: \"$string2\" </label> <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ;
        // Jawaban Soal No 2
        echo "Kata kedua: " . substr($string2, 2, 4) . "<br>" ;
        echo "Kata Ketiga: " . substr($string2, 7, 3) . "<br>" ;


        echo "<h3>Soal No 3</h3>";
        
        $string3 = "PHP is old but Good!";
        echo "String: \"$string3\"<br>";
        
        // Jawaban Soal No 3
        echo str_replace("Good!", "awesome", $string3);
    ?>
</body>
</html>