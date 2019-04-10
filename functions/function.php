<?php
    function multiplicar($num1, $num2){

        return $num1*$num2;
    }


    function numOpcional($num1, $num2 = null){
        if($num2 != null){
             return $num1+$num2;
        }else{
            return "você só passou o \$num1";
        }
    }


    
?>