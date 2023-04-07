<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Funções Aritméticas do PHP</h1>
    <?php 
    $r = abs(-2000);
    $rs = abs (5000);
    $bs = base_convert(254, 10, 8);
    $bse = base_convert(254, 10, 16);
    $bser = base_convert(254, 10, 2);
    $r2 = 5/2;
    $r3 = 5%2;
    $r4 = intdiv(5, 2);
    $minn = min(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $maax = max(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $pii = M_PI;
    $pII = pi();
    $sqt = sqrt(81);
    ?>
    <p> <?php echo "Número absoluto (abs) - de -2000 é $r e de 5000 é $rs"?></p>
    <p> <?php echo "O número 254 da base decimal (10) para octal (8) é $bs"?> </p>
    <p><?php echo "O número 254 da base decimal (10) para exadecimal (16) é $bse" ?></p>
    <p><?php echo "O número 254 da base decimal (10) para binario (2) é $bser" ?></p>
    <p><?php echo "5 divido por 2 é $r2"?></p>
    <p><?php echo " O resto da divisao 5 por 2 é $r3"?></p>
    <p><?php echo "A divisao inteira de 5 por 2 é $r4"?></p>
    <p><?php echo "O valor minimo entre 1 e 10 é $minn e o valor maximo é $maax"?></p>
    <p><?php echo "para mostrar o valor de pi pode ser ultilizando, pi() = $pii ou M_PI = $pII"?></p>
    <p><?php echo "A raiz quadrada de 81 é $sqt"?></p>
</body>
</html>