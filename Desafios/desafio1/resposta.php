<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecessor e Sucessor</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_GET["num"] ?? 0;
                $ant = $n - 1;
                $suc = $n + 1;
                echo "O número escolhido foi <strong>$n</strong>";
                echo "<br>O seu <strong><em>antecessor</em></strong> é  $ant";
                echo "<br>O seu <strong><em>sucessor</em></strong> é $suc";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>