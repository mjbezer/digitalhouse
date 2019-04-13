
<?php
/*
function podium ($num){

	switch ($num) {
			case 1:
				echo "ouro";
				break;
				case 2:
				echo "prata";
				break;
			case 3:
				echo "bronze";
				break;
			default:
				echo "nada";
		break;
		}	

}


function saldo ($array){
    $resultado = 0;

    for($i=0; $i<=count($array);$i++){
    
       if ($saldo[$i] > 0){
        $resultado++;
         }
    return $resultado; 
}

function eMaior($num1, $num2){

    if($num1 == $num2){
        return "numeros são iguais";
    }elseif($num1 > $num2){
        return $num1;
    }else{
        return $num2;
    }
}

function numSorte($num){

    $resultado = $num%2;

    if ($resultado == 0 && $num!=12){

        return "Achei o número da sorte";
    }else{
        return "não achei o número da sorte";
    }

}*/

function mover($arrayA, $arrayB){

    $n= count($arrayA) -1;
        array_push($arrayB, $arrayA[$n]);
    return $arrayB;
}

 print_r(mover([1,2,3], [5,6]));

?>