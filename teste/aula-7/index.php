<?php 

/*
$nomeArquivo =  "dados.txt";

$arquivoAberto = fopen($nomeArquivo, "r");
if($arquivoAberto){
    $contador = 1;

    while(($linha = fgets($arquivoAberto))&& $contator <=10){
         echo $linha;
         ++$contador;
    }

}


$nomeArquivo =  "dados.txt";

        if(file_exists($nomeArquivo)){
            $conteudo = file_get_contents($nomeArquivo);
            $conteudo.= "Editei o arquivo\n";
            file_put_contents($nomeArquivo, $conteudo);
            echo $conteudo;
        }else{
            file_put_contents($nomeArquivo,"criei o arquivo! \n");
        }




$nomeArquivo =  "macaco.txt";

//verificando a existência do arquivo se não existir será criado
    if(!file_exists($nomeArquivo)){
        //abrindo o arquivo
        $arquivoAberto = fopen($nomeArquivo,"w+");
        //escrevendo no arquivo
        for($i=1; $i<101;$i++){
            fwrite($arquivoAberto, $i."- Macaco prego não gosta de sabo martelo!!\n");
        }
        //fechado o arquivo
        fclose($arquivoAberto);
    }else {

        $arquivoAberto = fopen($nomeArquivo,"r");
        $tamanho = filesize($nomeArquivo);
     
        $conteudo =  fread($arquivoAberto, $tamanho);
        echo $nomeArquivo. "   ".$tamanho."<br><br>";
        echo $conteudo;
    }*/



?>
