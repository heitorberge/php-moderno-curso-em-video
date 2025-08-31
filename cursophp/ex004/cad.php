<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_POST['nome'] ?? "sem nome";
        $sobrenome = $_POST['sobrenome'] ?? "sem sobrenome";
        echo "É um prazer te conhecer, <strong>$nome $sobrenome</strong>!Este é o meu site<br>";
        ?>
        <p><a href="index.html">Voltar para o início</a></p>
    </main>
</body>

</html>