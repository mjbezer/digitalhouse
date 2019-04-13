<?php
$nomeArquivo =  "usuarios.json";

if(file_exists($nomeArquivo)){

    $conteudoJson = file_get_contents($nomeArquivo);

    $arrayAssoc = json_decode($conteudoJson,true);

  
}

?>

<ul>
    <?php foreach($arrayAssoc as $key=>$value): ?>
    <li><?php echo $key ." : ". $value;?> </li>
    <?php endforeach; ?>
</ul>
