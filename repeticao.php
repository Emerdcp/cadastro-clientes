<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <h1>Repetição</h1>
    <?php
    $contador = 1;
    while($contador <=10){
        echo "contador com while, loop número $contador<br>";
        $contador = $contador + 1;
        //$contador++;
    }

    echo "<br>";
    echo "<hr>";
    //array
    $cliente = ["Emerson", "Eduardo", "Kadu", "Karina", "Luzia", "Kauana", "Antonio", "Gabriel", "Andrea"];
    //echo "$cliente[0]<br>";
    //echo "$cliente[2]<br>";
    $i = 0;
    while($i <=8){
        echo "$cliente[$i]<br>";
        $i = $i + 1;
    }
    echo "<hr>";
    $i = 0;
    while($i < count($cliente)){
        echo "$cliente[$i]<br>";
        $i = $i + 1;
    }
    
    echo "<hr>";
    for ($i=0; $i < count($cliente);
    $i++) {
        echo "$cliente[$i]<br>";
    }
    ?>
</body>
</html>