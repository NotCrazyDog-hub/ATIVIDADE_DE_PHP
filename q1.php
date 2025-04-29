<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q1</title>
</head>
<body>
    <?php
    echo $v1 = 245;
    echo "<br>";
    echo $v2 = 245;
    echo "<br>";
    function soma($x, $y) {
        return $x + $y;
    }
    echo "A soma de {$v1} com {$v2} é " , soma($v1, $v2);
    ?>
</body>
</html>