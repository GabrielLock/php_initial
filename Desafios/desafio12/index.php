<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <?php 
        $segundos = $_GET['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p><?="Analisando o valor que você digitou, <strong>" . number_format($segundos, 0, ".", ".") . " segundos</strong> equivalem a um total de:"?></p>
        <?php 
        $semanas = intdiv($segundos, 604_800);
        $difSemanas = $segundos % 604_800;
        $dias = intdiv($difSemanas, 86_400);
        $difDias = $difSemanas % 86_400;
        $horas = intdiv($difDias, 3_600);
        $difHoras = $difDias % 3_600;
        $minutos = intdiv($difHoras, 60);
        $segundos = $difHoras % 60;

            echo "<ul>";
            echo "<li>$semanas semanas</li>";
            echo "<li>$dias dias</li>";
            echo "<li>$horas horas</li>";
            echo "<li>$minutos minutos</li>";
            echo "<li>$segundos segundos</li>";
            echo "</ul>"
        ?>
    </section>
</body>
</html>