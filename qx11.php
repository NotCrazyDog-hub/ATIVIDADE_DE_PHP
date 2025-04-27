<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q11</title>
</head>
<body>
    <form method="get">
        Compre um Notebook da Vivobook por R$ 2799,99 aqui!
        <br>
        Insira a porcentagem<input type="number" name="porcento">
        <br>
        <input type="submit">
    </form>
    <?php
    if (isset($_GET["porcento"])) {
        $valor = 2799.99;
        $porcento = $_GET["porcento"] / 100;
        $valorComPorcento = $valor + $valor * $porcento;
        echo "O valor a ser pago é R$ $valorComPorcento";
    }
    ?>
</body>
</html>