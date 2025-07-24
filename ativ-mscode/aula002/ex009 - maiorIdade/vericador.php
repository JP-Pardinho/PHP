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
        <?php 
            function verificaIdade($nome, $data){
                $parteData = explode("-", $data);
                $anoNascimento = (int)$parteData[0];
                $anoAtaual = (int)date("Y");
                
                $idade = $anoAtaual - $anoNascimento;
                
                if ($idade < 18){
                    echo "<p>$nome tem $idade anos, então ainda não pode ser preso(a)! :C</p>";
                } else if ($idade > 18) {
                    echo "<p>$nome tem $idade anos, então já pode ser preso(a)! :D</p>";
                } else {
                    echo "<p>Parabens $nome parece que você acabou de fazer $idade anos, então já pode ser preso(a)! :D</p>";
                }
            }
            
            $nome = $_GET["nome"];
            $data = $_GET["data"];
            echo "<h1>$nome já pode ser preso(a)?</h1>";
            verificaIdade($nome, $data);
        ?>

        <a href="javascript:history.go(-1)"><button>Voltar para pagina anterior</button></a>
    </div>
</body>
</html>