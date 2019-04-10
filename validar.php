<?php

//$nome =  $_GET["nome"];
//$senha =  $_GET["senha"];

//$nome =  $_POST["nome"];
//$senha =  $_POST["senha"];
$nome =  $_REQUEST["nome"];
$senha=$_REQUEST["senha"];


?>

<h3><?php echo $nome;?></h3>
<p><?php echo md5($senha);?></p>


