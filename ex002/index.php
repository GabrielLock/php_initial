<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    $num = 010;
    $NUM = 0x1A;
    $v = "Gabriel";
    $numero = 3e2;
    $casado = false;
    $vet = [6, 2.5, false, "Leao", 2];
    $coercao = (int)"950";
    $scoercao = "950";
    ?>
    <p>
        <?php echo "O valor da variável é $num"?>
    </p>

    <p>
        <?php echo "O valor da variável é $NUM"?>
    </p>

    <p>
        <?php echo "O valor da variável é $v"?>
    </p>

    <p>
        <?php echo "O valor da variável é $numero"?>
    </p>

    <p>
        <?php echo "O valor da variável é $casado"?>
    </p>

    <p>
        <?php var_dump($num)?>
    </p>

    <p>
        <?php var_dump($NUM)?>
    </p>

    <p>
        <?php var_dump($v)?>
    </p>

    <p>
        <?php var_dump($numero)?>
    </p>

    <p>
        <?php var_dump($casado)?>
    </p>

    <p>
        <?php var_dump($vet)?>
    </p>

    <p>
        <?php var_dump($scoercao)?>
    </p>

    <p>
        <?php var_dump($coercao)?>
    </p>
</body>
</html>