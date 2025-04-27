<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $custoDeFabrica = 50000;

    $imposto = $custoDeFabrica * 0.45;

    $custoComImposto = $custoDeFabrica + $imposto;

    $distribuidor = $custoComImposto * 0.28;

    $custoAoConsumidor =  $custoComImposto + $distribuidor;

    echo "O custo de fábrica é R$ $custoDeFabrica + impostos de 45% somados com a porcentagem do distribuidor de 28%";
    echo "<br>";
    echo "= R$ $custoAoConsumidor";
    ?>
</body>
</html>