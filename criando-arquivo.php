<?php

$arquivo = fopen("clientes.txt","w");
/*
$cliente01 = "Emerson\n";
fwrite($arquivo, $cliente01);

$cliente02 = "Kadu\n";
fwrite($arquivo, $cliente02);
*/
/*
$listaClientes = ["Karina","Eduardo","Emerson"];
print_r($listaClientes);
echo "<br>";

for($i=0; $i<count($listaClientes); $i++){
    echo $listaClientes[$i] . "<br>";
    fwrite($arquivo, $listaClientes[$i] . "\n");
}
*/

$listaClientes = [
    [
        "nome" => "Emerson",
        "idade" => 33    
    ],
    [
        "nome" => "Karina",
        "idade" => 33   
    ],
    [   "nome" => "Kadu",
        "idade" => 5
    ],
    [
        "nome" => "Eduardo",
        "idade" => 8
    ],
    [
        "nome" => "Gabriel",
        "idade" => 39
    ]
];
/*
print_r($listaClientes[0]["nome"]);//print_r serve para debugar no PHP
print_r($listaClientes[0]["idade"]);
echo "<br>";*/

for($i=0; $i<count($listaClientes); $i++){
    fwrite($arquivo, $listaClientes[$i]["nome"] . "\t\t");
    fwrite($arquivo, $listaClientes[$i]["idade"] . "\n");
}

fclose($arquivo);

?>

<a href="clientes.txt" download>Lista de Clientes</a>/