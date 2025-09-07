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
        <h1>Conversor de Moedas v2.0</h1>
        <?php
        $inicio = date('m-d-Y', strtotime('-7 days'));
        $fim = date('m-d-Y');
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);

        if ($dados && isset($dados["value"][0]["cotacaoCompra"])) {
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $Reais = $_POST['moed'];

            // Calcula o valor em dólares
            $Dolares = $Reais / $cotacao;

            // Formata os valores
            $ReaisFormatado = number_format($Reais, 2, ',', '.');
            $DolaresFormatado = number_format($Dolares, 2, ',', '.');

            echo "Seus R$$ReaisFormatado equivalem $$DolaresFormatado <br>";
        } else {
            echo "Não foi possível obter a cotação do dólar no momento. Por favor, tente mais tarde.";
        }
        ?>
        <p><a href="index.html"><button type="button">Voltar</button></a></p>
    </main>
</body>

</html>