<?php
require "inc/functions.php";

foreach($_REQUEST as $key=>$value){
    $$key = $value;
}

validarCompra($nomeCompleto, $cpf, $numeroCartao, $validadeCartao, $cvvCartao);

include "inc/head.php";
include "inc/header.php";
?>
    
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <?php if(count($erros)>0): ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <span>Preencha seus dados corretamente!</span>
                    
                    </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <?php foreach($erros as $valorErro):?>
                                <li class="list-group-item">
                                    <?=  $valorErro; ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="center"><a href="index.php">Voltar</a></div>
                            
                        </div>
                </div>
            <?php else: ?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <span>Compra Realizada</span>
                    
                    </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                <strong>Nome Curso:</strong><?= $curso; ?>
                                </li>
                                <li class="list-group-item">
                                <strong>Preço : R$ <?php echo $preco; ?> </strong>
                                </li>
                                <li class="list-group-item">
                                <strong>Nome Completo: <?php echo $nomeCompleto ;?> </strong>
                                </li>
                            </ul>
                            <div class="center"><a href="index.php">Voltar</a></div>
                            
                        </div>
                </div>
            <?php endif; ?>
        </div>

    </div>

<?php include "inc/foorter.php"; ?>


