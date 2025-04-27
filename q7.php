<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q7</title>
</head>
<body>
    <form method="GET">
        Insira a temperatura (em celsius) <input type="number" name="celsius">
        <br>
        <input type="submit">
        <br>
    </form>
    <?php
    if(isset($_GET["celsius"])) {
        $temperatura = $_GET["celsius"];
        $fahrenheit = (9 * $temperatura + 160) / 5;
        echo "Em Fahrenheit é: " , $fahrenheit;
    }
    ?>
</body>
</html>