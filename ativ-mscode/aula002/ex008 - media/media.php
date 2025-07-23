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
            function calculaMedia($notas){
                $soma = 0;
                $cont = count($notas);

                $string = '';
                $row = 0;
                foreach($notas as $key){
                    $soma += $key;
                    $row++;
                    if ($row === $cont) {
                        $string .= $key . ' =';
                        break;
                    }
                    $string .= ' ' . $key . ' + ';
                }
                $media = $soma/$cont;
                echo "<p>O valor das notas $string $media</p>";
            }

            calculaMedia($_GET);
        ?>

        <a href="javascript:history.go(-1)"><button>Voltar para a pagina anterior</button></a>
    </div>    
</body>
</html>