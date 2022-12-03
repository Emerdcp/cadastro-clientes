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
        "idade" => 36    
    ],
    [
        "nome" => "Karina",
        "idade" => 34    
    ]
];

print_r($listaClientes[0]["nome"]);
print_r($listaClientes[0]["idade"]);
echo "<br>";

for($i=0; $i<count($listaClientes); $i++){
    fwrite($arquivo, $listaClientes[$i]["nome"] . "\t");
    fwrite($arquivo, $listaClientes[$i]["idade"] . "\n");
}

fclose($arquivo);

?>