<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $score = 5;
       
       if($score <10 && $score > 3){
        echo "het getal zit tussen de 3 en 10" ."<br>";

       } else {
          echo "het getal is groter dan 10 en kleiner dan 5". "<br>";

       }
       if($score <10 || $score > 6){
        echo "het getal is kleiner dan 10 en groter dan 4". "<br>";

       } else {
          echo "het getal is kleiner dan 10 en kleiner dan 6". "<br>";

       }
       if($score >10 xor $score < 3){
        echo "het getal zit tussen de 10 en 15". "<br>";

       } else {
          echo "het getal is groter dan 3 en kleiner dan 6". "<br>";

       }
       if($score !==6){
        echo "het getal zit tussen de 3 en 10". "<br>";

       } else {
          echo "het getal is groter dan 1 en kleiner dan 7". "<br>";
       }


    ?>
</body>
</html>