<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas - Basico</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            //cotação fixa do google dia 07/04/23
            $cotação = 5.06;

            //Valor digitado 
            $real = $_GET["din"] ?? 0;

            //equivalencia em dolar
            $dolar = $real / $cotação;

            //Formataçao internacional - Biblioteca intl(internalization PHP)

            $padrao = numfmt_create ("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>