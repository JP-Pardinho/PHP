<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado final</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <?php
            $numero = $_GET["numero"];
            echo "<p>O numero escolhido foi <strong>$numero</strong></p>";
            echo sprintf('<p>O seu antecessor é %d</p>', $numero -1);
            echo sprintf('<p>O seu sucessor é %d</p>', $numero + 1);
        ?>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </main>
</body>
</html>