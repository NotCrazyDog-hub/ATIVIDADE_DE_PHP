<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q2</title>
</head>
<body>
    <?php
    function soma($x, $y){
        return $x + $y;
    }
    function subt($x, $y){
        return $x - $y;
    }
    function mult($x, $y){
        return $x * $y;
    }
    function divi($x, $y){
        return $x / $y;
    }
    echo "O primeiro número é: " , $n1 = 12;
    echo "<br>";
    echo "O segundo número é: " , $n2 = 490;
    echo "<br>";
    echo "<br>";
    echo "A soma é: " , soma($n1, $n2);
    echo "<br>";
    echo "A subtração é: " , subt($n1, $n2);
    echo "<br>";
    echo "A multiplicação é: " , mult($n1, $n2);
    echo "<br>";
    echo "A divisão é: " , divi($n1, $n2);
    ?>
</body>
</html>