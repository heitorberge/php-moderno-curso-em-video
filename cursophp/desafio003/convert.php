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
        <h1>Conversor de Moedas v1.0</h1>
        <?php
        $Reais = $_POST['moed'];
        $Dolares = $Reais / 5.22;
        echo "Seus $Reais equivalem $Dolares <br>";
        echo "*Cotação fixa de R$5,22 informada diretamente no código.";
        ?>
        <p><a href="index.html"><button type="button">Voltar</button></a></p>
    </main>
</body>

</html>