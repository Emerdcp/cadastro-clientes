<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio1</title>
</head>
<body>
    <h1>Exercicio3</h1>
    <h3>Faça um programa que exiba a tabuada do 8</h3>
    
    <?php 
    for($i=0 ; $i <= 10; $i++){
        echo "$i x 8 = " . $i*8 . "<br>";
    }

    echo "<hr>";
       
    for($i=0 ; $i <= 10; $i++){
        $total = $i * 8;
        echo "$i x 8 = $total <br>";
    }
    
    /*
    $cont = 8;
    while ($cont <= 10){
        $resultado = $resultado * $cont;
        echo($resultado . "x" . $cont . " = " .$resultado)."<br>";
        $cont++;

    }
 */
    
?>

</body>
</html>