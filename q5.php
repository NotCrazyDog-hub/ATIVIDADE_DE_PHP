<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q5</title>
</head>
<body>
    <?php
    $nome = 'Guilherme Queiroz';
    function media($n1, $n2, $n3) {
        return ($n1 + $n2 + $n3) / 3;
    }
    echo "A nota do aluno {$nome} é " , media(0, 9.5, 8);
    ?>
</body>
</html>