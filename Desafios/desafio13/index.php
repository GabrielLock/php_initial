<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletônico</title>
</head>
<body>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="" method="get">
            <label for="din">Qual valor você deseja sacar ?(R$)*</label>
            <input type="number" name="din" id="din">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de realizado</h2>
        <p><?="O caixa eletrônico vai te entregar as seguintes notas:"?></p>
        <?php 
            echo "<ul>";
            echo "<li><img src=\"./realNotas/100-reais.jpg\" alt=\"nota de cem reais\"> x</li>";
            echo "<li><img src=\"./realNotas/50-reais.jpg\" alt=\"nota de cinquenta reais\"> x</li>";
            echo "<li><img src=\"./realNotas/10-reais.jpg\" alt=\"nota de dez reais\"> x</li>";
            echo "<li><img src=\"./realNotas/5-reais.jpg\" alt=\"nota de cinco reais\"> x</li>";
            echo "</ul>"
        ?>
    </section>
</body>
</html>