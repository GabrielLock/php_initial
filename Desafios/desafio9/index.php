<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias Aritméticas</title>
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ?? 1;
        $v2 = $_GET['v2'] ?? 1;
        $p1 = $_GET['p1'] ?? 1;
        $p2 = $_GET['p2'] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" required value="<?=$v1?>">
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" required value="<?=$p1?>">
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" required value="<?=$v2?>">
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" required value="<?=$p2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <p><?="Analisando os valores $v1 e $v2:"?></p>
        <?php 
            $mediaSimples = ($v1 + $v2) / 2;
            $mediaPonderada = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
            echo "<ul>";
            echo "<li>A <strong>Média Aritmétrica Simples</strong> entre os valores é igual a ". number_format($mediaSimples, 2, ",", ".") .".</li>";
            echo "<li>A <strong>Média Aritmétrica Ponderada</strong> com pesos $p1 e $p2 é igual a ". number_format($mediaPonderada, 2, ",", ".") .".</li>";
            echo "</ul>"?>
    </section>
</body>
</html>