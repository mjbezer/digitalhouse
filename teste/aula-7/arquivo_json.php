<?php

$nomeArquivo = "usuarios.json";

$arrayAssoc=[
    "nome" => "Marcelo Bezerra",
    "email" =>"mjbezer@hotmail.com",
    "senha" => "123456"
];

$json = json_encode($arrayAssoc);


file_put_contents($conteudo,$json);

// $novoArrayAssoc = json_decode($json,true);

// echo "<BR><br>JSON DECODE <BR>";
// var_dump ($novoArrayAssoc);


?>
