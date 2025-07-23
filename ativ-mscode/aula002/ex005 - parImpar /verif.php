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
            function verNum($num){
                if ($num % 2 == 0){
                    echo "<p>O numero $num é PAR</p>";
                } else {
                    echo "<p>O numero $num é IMPAR</p>";
                }
            }

            $numero = $_GET['numero'];
            verNum($numero);
        ?>
        <a href="javascript:history.go(-1)"><button>Voltar para pagina anterior</button></a>
    </div>
</body>
</html>