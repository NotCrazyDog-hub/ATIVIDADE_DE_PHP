<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q10</title>
</head>
<body>
    <h1>--- COMPRAR AQUI É MAMÃO COM AÇUCAR! ---</h1>
    <br>
    <p>Aqui, você encontrará produtos que cabem no seu bolso ecom aquele atendimento que só quem é de casa entende!</p>
    <p>Aqui temos...</p>
    <?php
    $valor = 2799.99;
    function prestacao($x) {
        return $x / 5;
    }
    echo "<br>";
    echo "- Notebook ASUS VivoBook Go 15, AMD RYZEN 5 7520U, 8GB, 512GB SSD, W11 Home, Tela 15,60'' FHD, Mixed Black - E1504FA-NJ836W";
    echo "<br>";
    echo "Por R$ $valor! - Você pode parcelar 5 VEZES por R$ " , prestacao($valor);
    ?>
</body>
</html>