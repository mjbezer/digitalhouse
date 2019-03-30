<?php

$pessoa = "Meu Nome";

// array simples
    $arraySimples = ["Thomaz", "Hendy", "Victor"];

//array associativo

    $arrayAssoc = [

        "Nome" => "Marcelo Bezerra",
        "Fruta" => "Abacaxi",
        "Idade" => 17
    ];

    $arrayAssoc["Time"] = "Corintians";
    $arrayAssoc["Jogo"] = "Xadrex";


    if ($arrayAssoc["Idade"]>=18){
        $acao = "Pode entrar";
    }elseif($arrayAssoc["Fruta"]=="Maça"){
        $acao = "Não Pode entrar vai";
    }elseif($arrayAssoc["Time"]=="Corintians"){
        $acao = "Fica de fora...";}

      echo $arrayAssoc["Jogo"] == "Xadrez"? "Voce é paciente" : "Medite mais";

      if( $arrayAssoc["Idade"]>=18){

        $acao2 = "Liberado";
              }else{
                  $acao2= "proibido";
              }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>

    <div>
     <h1><?php echo $acao2; ?></h1>

    </div>

    
</body>
</html>