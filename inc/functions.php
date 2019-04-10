<?php

$erros=[];

    function validarNome($nome){
        return strlen($nome) >0 &&  strlen($nome)<60;
    }

    function validarCPF($cpf){
        return strlen($cpf)==11;
    }

    function validarNroCartao($cartao){
            $primeiroNum =  substr($cartao, 0, 1);
            return $primeiroNum == 4 || $primeiroNum == 5 || $primeiroNum == 6;
    }

    function validarData($data){
            $dataAtual =strtotime(date("Y-m"));
            $data = strtotime($data);
            return $data > $dataAtual;
    }

    function validarCvv($cvv){
        return strlen($cvv)==3;
    }
    
    function validarCompra($nome,$cpf,$nroCartao,$dtValidade,$cvv){
        global $erros; 

        if (!validarNome($nome)){
            array_push($erros, "Preencha o campo Nome!");
         
        }
        if (!validarCPF($cpf)){
            array_push($erros, "Preencha o campo CPF com 11 Caractéres!");
        }
        if (!validarNroCartao($nroCartao)){
            array_push($erros, "O campo Numero Cartão  precisa começarm com 4, 5 ou 6!");
        }
        if (!validarData($dtValidade)){
            array_push($erros, "Validade do cartão precisa ser maior que a data atual!");
        }
        if (!validarCvv($cvv)){
            array_push($erros, "Preencha o campo CVV com 3 dígitos!");
        }
   }

?>