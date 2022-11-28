<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1>
        Cadastro de Clientes
    </h1>
    <?php
    $nome = "Emerson";
    $idade = 34;
    $fumante = false;
    echo "<p>Id cliente: $nome <br>";
    echo "Idade cliente: $idade <br>";
    echo "Fumante: $fumante </p>";
    /*
    OPERADPRES ARITMÉTRICOS    
        Operador de Soma: +
        Operador de Subtração: - 
        Operador de Multiplicação: *
        Operador de Divisão: /
        Operador Resto da Divisão: %
    */
    echo 20*3;
    echo "<br>";
    /*OPERADPRES RELACIONAIS
        == Igual
        != Diferente
        === Idêntico a (valores iguais e do mesmo tipo)
        !== Não idêntico a
        < Menor que
        > Maior que
        <= Menor ou igual
        >= Maior ou igual
    */
    echo 20>10 + 30;
    echo "<br>";
    /*
    OPERADPRES LÓGICOS
    */
    echo "operadores lógicos<br>";
    $fumante = true;
    echo !$fumante;
    /*
    $idade = 18;
    if ($idade > 18 || $idade ==18){
        echo "<p>Sua idade é $idade </p>";
        echo "<p>Pode entrar na festa</p>";
    }
    */
    $idade = 18;
    if ($idade >= 18 && $fumante == false){
        echo "<p>Sua idade é $idade </p>";
        echo "<p>Pode entrar na festa</p>";
    }else{
        echo "Você não pode entrar";
    }
    ?>
</body>
</html>