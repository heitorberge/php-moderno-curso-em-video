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
        <h1>Trabalhando com números aleatórios</h1>
        <?php
        echo "Gerando um número aleatório entre 1 e 100... <br>";
        $numAle = rand(1, 100);
        echo "O valor gerado foi $numAle";

        ?>
        <p>
            <button type="button" onclick="location.reload()">🔄️Gerar novamente</button>
        </p>
    </main>
</body>

</html>