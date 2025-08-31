<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Teste de tipos primitivos em PHP</h1>
    <?php
    // 0x = hexadecimal 0b = binário 0 = octal
    //$num = 0x1A;
    //echo "O valor da variável é $num";

    //$v = "Gustavo";
    //var_dump($v);

    //$num = 3e2; //3 x 10²
    //echo "O valor da variável é $num";

    //$num = (float) "950";
    //var_dump($num);

    //$casado = true;
    //var_dump($casado);
    //print  "O valor para casado é $casado";

    //$vet = [6, 2.5, "Maria", false];
    //var_dump($vet);

    class Pessoa
    {
        private string $nome;
    }

    $p = new Pessoa();
    echo $p->$nome;
    ?>
</body>

</html>