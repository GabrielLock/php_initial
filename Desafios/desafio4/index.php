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
            //cotação vinda da API do Bando Central
            $inicio = date("m-d-Y", strtotime("-7days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotação = $dados["value"][0]["cotacaoCompra"];

            //Valor digitado 
            $real = $_GET["din"] ?? 0;

            //equivalencia em dolar
            $dolar = $real / $cotação;

            //Formataçao internacional - Biblioteca intl(internalization PHP)

            $padrao = numfmt_create ("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            echo "<p><small>*A cotação foi obtida diretamente do <strong><a href=\"https://www.bcb.gov.br/\">Banco Central do Brasil</a>.</strong></small></p>";
        ?>
         <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>