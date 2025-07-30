<?php 
    

    $tabuada = null;
    if (isset($_GET["tabuada"])){
        $tabuada = $_GET["tabuada"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <select name="tabuada">
            <?php 
                for($i=1; $i<11; $i++){
                    echo sprintf('<option value="%d">%d</option>', $i, $i);
                }
            ?>
        </select>   
        <input type="submit" value="Enviar">
    </form>

    <div>
        <?php 
            if ($tabuada != null){
                for($j=1; $j<11; $j++){
                    $resultado = $j + $tabuada;  
                    echo "<p>$j + $tabuada = $resultado</p>";
                }
            }
        ?>  
    </div>
</body>
</html>
