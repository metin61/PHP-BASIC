<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $prod_besteld = 5;

        if($prod_besteld < 10) {
            $prijs = 1.50;
            echo $prijs;
        } elseif($prod_besteld < 20) {
            $prijs = 1.25;
            echo $prijs;
        } else {
            $prijs = 1.00;
            echo $prijs;
        }

       
    
    ?>
</body>
</html>