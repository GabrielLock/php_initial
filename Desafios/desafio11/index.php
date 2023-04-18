<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajustando preços</title>
</head>
<body>
    <main>
        <h1>Reajustandor de Preços</h1>
        <form action="" method="get">
            <label for="din">Preço do Produto (R$)</label>
            <input type="number" name="din" id="din">
            <label for="porc">Qual será o percentual de reajuste?()</label>
            <input type="range" name="porc" id="porc" min="1" max="100" value="50">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
    </section>
</body>
</html>