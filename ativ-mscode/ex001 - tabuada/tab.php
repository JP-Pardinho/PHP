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
        <header>
            <h1>Resultado</h1>
        </header>
        <main>
            <?php 
                $numero = $_GET["numero"];
                for($i=1; $i<11; $i++){
                    $multi = $numero * $i;
                    echo "<p>$numero x $i = $multi </p>";
                }
            ?>
        </main>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </div>
    
</body>
</html>