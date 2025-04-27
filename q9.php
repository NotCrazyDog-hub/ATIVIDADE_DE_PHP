<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q9</title>
</head>
<body>
<form method="get">
        Insira o valor depositado<input type="number" name="valor">
        <br>
        <input type="submit">
        <br>
    </form>
    <?php
    if(isset($_GET["valor"])) {
        $dolares = $_GET["valor"];
        $real = $dolares * 5.7;
        echo "O preço em real é R$ $real";
    }
    ?>
</body>
</html>