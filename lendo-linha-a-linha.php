<?php
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo,"r");
while(!feof($arquivo)){
    $valor = fgets($arquivo, 100);
    echo "$linha<br>";
}
fclose($arquivo);
?>