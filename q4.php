<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q4</title>
</head>
<body>
    <?php
    echo "Vendedor: " , $nome = "Seu Zé";
    echo "<br>";
    echo "Salário fixo é: R$ " , $salarioFixo = 2600;
    echo "<br>";
    echo "Total de vendas: R$ " , $vendas = 1500;
    echo "<br>";
    $salarioFinal = $salarioFixo + $vendas * 0.15;
    echo "Seu salário de $nome no fim do mês: " , $salarioFinal;
    ?>
</body>
</html>