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
        <h1>Resultado Final</h1>
        <?php
        $num = $_POST['num'];
        $antecessor = $_POST['num'] - 1;
        $sucessor = $_POST['num'] + 1;
        echo "O número escolhido foi $num <br>";
        echo "O seu antecessor é $antecessor <br>";
        echo "O seu sucessor é $sucessor";
        ?>
        <p><a href="index.html"><button type="button">Voltar</button></a></p>
    </main>
</body>


</html>