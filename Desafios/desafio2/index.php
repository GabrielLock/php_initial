<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteador de Números</title>
</head>
<body>
    <main>
        <h1>Trabalando com números aleatórios</h1>
        <?php 
        $min = 0;
        $max = 1000;
        $num = mt_rand($min, $max);
        echo "<p>Gerando um número aleatório entre $min e $max...<br>
        O valor gerado foi <strong>$num</strong></p>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Mais uma vez !</button>
    </main>
</body>
</html>