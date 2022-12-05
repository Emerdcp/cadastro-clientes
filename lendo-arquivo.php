<?php
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo,"r");
$conteudo = fread($arquivo, filesize($nomearquivo));
echo $conteudo;
fclose($arquivo);
?>

Emerson;33; Karina;33; Kadu;5; Eduardo;8; Gabriel;39;

Emerson 33 
Karina 33 
Kadu 5 
Eduardo 8 
Gabriel 39