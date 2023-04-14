<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raízes de um número</title>
</head>
<body>
    <?php 
        $numero = $_GET['num'] ?? 2;

    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" min="2" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">

        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p><?="Analisando o <strong>número $numero</strong>, temos:"?></p>
        <?php 
            $quadrada = $numero ** (1/2);
            $cubica = $numero ** (1/3);
            echo "<ul>";
            echo "<li>A sua raiz quadrada é <strong>". number_format($quadrada, 3, ",", ".") ."</strong> </li>";
            echo "<li>A sua raiz cúbica é <strong>". number_format($cubica, 3, ",", ".") ."</strong></li>";
            echo "</ul>"
        ?>
    </section>
</body>
</html>