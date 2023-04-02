<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Constantes</title>
</head>
<body>
    <?php 
    $nome = "pedro";
    $NOME = "maria";
    $salário = 2500.75;
    $salario = 1500;
    $valor╬ = 200;
    const _TX = 700;
    ?>
    <h1>
        <?php 
        echo "Testando variaveis e constantes" ;?>
    </h1>
    <p>
        <?php
        echo "Seu nome é $nome ?" ;?>
    </p>
    
    <p>
    <?php 
        echo "Seu nome é $NOME ?";?>
    </p>
    
    <p><?php 
        echo "Seu salário é $salário";?>
    </p>

    <p><?php 
        echo "Seu salário é $salario";?>
    </p>

    <p><?php 
        echo "o valor é igual a $valor╬ no programa";?>
    </p>

    <p><?php 
        echo "Resultado = " . _TX;?>
    </p>

</body>
</html>