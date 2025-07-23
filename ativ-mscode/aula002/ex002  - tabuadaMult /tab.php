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
            function tabuada($numero){
                $mult = 0;
                for($i=0; $i<=10; $i++){
                    $mult = $numero * $i;
                    echo "<p>$numero x $i = $mult</p>";
                }
            }

            $num = $_GET["numero"];
            tabuada($num);
        ?>
        <a href="javascript:history.go(-1)"><button>Voltar para pagina anterior</button></a>
    </div>
</body>
</html>