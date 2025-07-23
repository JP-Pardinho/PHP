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
            function fatorial($numero){   
                $aux = $numero;             
                for($i = $numero; $i > 1; $i--){ 
                    $aux = $aux * ($i - 1);
                }
                echo "<p>$numero! = $aux</p>";
            }

            $num = $_GET["numero"];
            fatorial($num);
        ?>

        <a href="javascript:history.go(-1)"><button>Voltar para a pagina anterior</button></a>
    </div>
</body>
</html>