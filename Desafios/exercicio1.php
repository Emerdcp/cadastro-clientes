<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio1</title>
</head>
<body>
    <h1>Exercicio1</h1>
    <h3>Faça um programa que exiba todos os números pares entre 0 e 100.</h3>

<?php   
    $pares = 0;
    for ($pares = 0 ; $pares <= 100; $pares++){
        if($pares % 2 == 0){
        echo $pares . "<br>";
        }        
    }
    echo "<hr>";
    
?>
</body>
</html>