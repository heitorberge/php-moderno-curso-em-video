<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>

</head>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php
        // Pegando as datas
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        // Montando a URL
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        // Consumindo a API
        $dados = json_decode(file_get_contents($url), true);

        // Pegando a cotação
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        // Pegando o valor do formulário
        // 1. Pega o valor que veio do formulário (que é um texto com vírgula)
        $valorDigitado = $_GET['valor'];

        // 2. Troca a vírgula por um ponto
        $valorComPonto = str_replace(",", ".", $valorDigitado);

        // 3. Agora sim, converte o texto em um número para o cálculo
        $real = (float)$valorComPonto;

        // Calculando a conversão
        $dolar = $real / $cotacao;

        // Formatando e mostrando o resultado
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        echo "<p>A cotação utilizada foi de <strong>" . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong>, obtida diretamente do site do Banco Central.</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>