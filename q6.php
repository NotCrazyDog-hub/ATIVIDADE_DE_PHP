<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q6</title>
</head>
<body>
    <?php
    echo "a =" , $a = 12;
    echo "<br>";
    echo "b = " , $b = 21;
    echo "<br>";

    [$a, $b] = [$b, $a];
    echo "a: $a, b: $b";

    // $a = 12;
    // $b = 21;
    ?>
</body>
</html>