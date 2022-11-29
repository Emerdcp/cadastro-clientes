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
    
    $idade = 18;
    if ($idade > 18 || $idade ==18){
        echo "<p>Sua idade é $idade </p>";
        echo "<p>Pode entrar na festa</p>";
    }

    echo "<br>"; 
    echo "<br>";
    $idade = 18;
    if ($idade >= 18 && $fumante == false){
        echo "<p>Sua idade é $idade </p>";
        echo "<p>Pode entrar na festa</p>";
    }else{
        echo "Você não pode entrar";
    }

    echo "<br>"; 
    echo "<br>";
    $idade = 18;
    if ($idade >= 18 && $fumante == false){
        echo "<p>Sua idade é $idade </p>";
        echo "<p>Pode entrar na festa</p>";
    }else if($idade >=70){
        echo"<p>Pessoas acima de 70 anos não podem entrar na festa</p>";
    }else{
        echo "Você não pode entrar";
    }
    
    echo "<br>"; 
    echo "<br>";
    $nota = 8;
    if($nota >= 8){
        echo "<p>Aprovado</p>";
    }else if($nota >= 5){
        echo "<p>Recuperação</p>";
    }else{
        echo "<p>Reprovado</p>";
    }

    echo "<br>"; 
    echo "<br>";
    $idade = 20;
    if($idade>=18){
        echo "Pode entrar";
    }else{
        echo "Rejeitado";
    }

    echo "<br>";  
    echo "<br>"; 
    $idade = 20;
    echo ($idade>=18) ? "Pode entrar" : "Rejeitado";
    
    echo "<br>"; 
    echo "<br>"; 
    $cor = "amarelo";
    switch ($cor){
        case 'azul':
            echo "<p>Sua cor favorita é <b>AZUL</b></p>";
            break;

        case 'verde':
            echo "<p>Sua cor favorita é <b>VERDE</b></p>";
            break;

        case 'vermelho':
            echo "<p>Sua cor favorita é <b>VERMELHO</b></p>";
            break;

        default:
            echo "<p>Sua cor favorita não é <b>verde, nem azul e nem vermelho</b></p>";
            break;
    }

    echo "<br>"; 
    echo "<br>"; 
    $dia = 8;
    switch($dia){
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda";
            break;
        case 3:
            echo "Terça";
            break;
        case 4:
            echo "Quarta";
            break;
        case 5:
            echo "Quinta";
            break;
        case 6:
            echo "Sexta";
            break;
        case 7:
            echo "Sábado";
            break;
        default:
            echo " Dia inválido";
            break;
    }

    ?>
</body>
</html>