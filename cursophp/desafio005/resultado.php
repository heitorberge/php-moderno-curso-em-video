<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Analise do Número Real</h1>
        <?php
        $num = $_GET['numero'];
        echo "Analisando o número $num informado pelo usuário:<br>";
        echo "°    A parte inteira do número é " . (int)$num . "<br>";
        echo "°    A parte fracionária do número é " . ($num - (int)$num);
        ?>
        <p><a href="index.html"><button type="button">Voltar</button></a></p>
    </main>
</body>

</html>