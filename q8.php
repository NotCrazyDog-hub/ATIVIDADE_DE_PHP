<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q8</title>
</head>
<body>
<form method="get">
        Insira o preço em dólar<input type="number" name="dolar">
        <br>
        US$ 1,00 = R$ 5,70
        <br>
        <input type="submit">
        <br>
    </form>
    <?php
    if(isset($_GET["dolar"])) {
        $dolares = $_GET["dolar"];
        $real = $dolares * 5.7;
        echo "O preço em real é R$ $real";
    }
    ?>
</body>
</html>