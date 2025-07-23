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
            function verOrdem($A, $B){
                if ($A < $B){
                    echo "<p>Ordem: A($A) é menor que B($B)</p>";
                } else {
                    echo "<p>Ordem: A($A) é maior que B($B)</p>";
                }
            }

            $numA = $_GET["numA"];
            $numB = $_GET["numB"];

            verOrdem($numA, $numB);
        ?>

         <a href="javascript:history.go(-1)"><button>Voltar para a pagina anterior</button></a>
    </div>
</body>
</html>