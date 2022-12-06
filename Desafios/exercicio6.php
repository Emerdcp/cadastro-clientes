<?php
$arquivo = fopen("fornecedores.txt","w");
$listaFornecedores = [
    [
        "name" => "Constance Alford",
        "email" => "lacinia.sed@yahoo.com",
        "country" => "United States"
    ],
    [
        "name" => "Ariana Jacobs",
        "email" => "non.feugiat@aol.ca",
        "country" => "Canada"
    ],
    [
        "name" => "Cade Wheeler",
        "email" => "egestas@protonmail.org",
        "country" => "Philippines"
    ],
    [
        "name" => "Hayes Greene",
        "email" => "sed.nunc.est@icloud.edu",
        "country" => "Norway"
    ],
    [
        "name" => "Quinlan Brock",
        "email" => "ac.sem@hotmail.net",
        "country" => "Vietnam"
    ]
];

for($i=0; $i<count($listaFornecedores); $i++){
    fwrite($arquivo, $listaFornecedores[$i]["name"]);
    fwrite($arquivo, $listaFornecedores[$i]["email"]);
    fwrite($arquivo, $listaFornecedores[$i]["country"]);
}

fclose($arquivo);

?>
