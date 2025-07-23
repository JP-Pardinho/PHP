<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Resultado</h1>
        <?php 
            function verificaNumero($numero){
                if ($numero > 0){
                    echo "<p>O valor $numero é possitivo</p>";
                } else if ($numero < 0){
                    echo "<p>O valor $numero é negativo</p>";
                } else {
                    echo "<p>O valor $numero é igual a zero</p>";
                }
            }
    
            $num = $_GET["numero"];
            verificaNumero($num);
        ?>
        <a href="javascript:history.go(-1)"><button>Voltar para pagina anterior</button></a>
    </div>
</body>
</html>