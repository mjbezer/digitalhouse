<?php

$array =  [
    "nome" => "Joe",
    "sobrenome" => "Ramone",
    "Cidade" => "Los Angeles",
    "Estado" => "California",
    "Namorada" => "Little Ramona"
];

        foreach($array as $campo=>$valor){
            $$campo = $valor;
            }




?>
