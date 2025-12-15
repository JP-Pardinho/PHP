<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor v1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de moedas v1.0</h1>
        <?php 
            $reais = $_GET["reais"];
            $dolar = 5.59;
            $conversao = number_format(($reais / $dolar), 2);
            echo "<h3>Seus R\$$reais equivalem a U\$$conversao</h3>";
            echo "<p>*Cotação fixa de R\$$dolar informada diretamente no código</p>";
        ?>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </section>
</body>
</html>