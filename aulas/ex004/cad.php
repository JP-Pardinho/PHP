<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            if (isset($_GET["nome"]) && isset($_GET["sobrenome"]) && !($_GET["nome"] == "" && $_GET["sobrenome"] == "")) {
                $nome = $_GET["nome"]; 
                $sobrenome = $_GET["sobrenome"];
                echo "<p>É um prazer te conhecer <strong>$nome $sobrenome</ strong>, esse é o meu site!</p>";
            } else {
                echo "<p>Preencha os dados para receber a mensagem de boas vindas! :D</p>";
            }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
    </main>
</body>
</html>