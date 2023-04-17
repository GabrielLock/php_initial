<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de Idade</title>
</head>
<body>
    <?php 
    $nasceu = $_GET['age'] ?? 1999;
    $ano = $_GET['agef'] ?? 2023;
    $anoAtual = date("Y");
    $idade = $ano - $nasceu;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="" method="get">
            <label for="age">Em que ano você nasceu?</label>
            <input type="number" name="age" id="age">
            <label for="agef">Quer saber sua idade em que ano?(atualmente estamos em <strong>2023</strong>)</label>
            <input type="number" name="agef" id="agef">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p><?="Quem nasceu em $nasceu vai ter <strong>$idade anos</strong> em $ano!"?></p>
    </section>
</body>
</html>