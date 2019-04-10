<?php 
  

    $cursos = [
        "Full Stack"        =>  ["Curso de desenvolvimento web", 1000.09, "full.jpeg", "fullstack"],
        "Marketeng"         =>  ["marketing digital", 1000.98, "marketing.jpg", "marketing"],
        "UX"                =>  ["Curso de User Experience", 9000.06 ,"ux.jpg", "ux"],
        "Mobile Android"    =>  ["Curso de apps", 987.07, "android.png", "android"] ,
        "Operador Chave"    =>  ["Curso de aprender a copiar", 10.01, "xerox.jpg", "xeror"],
        "Desenhista Copista" => ["Criatividade pra que?", 5.05, "copia.jpg", "desenhista"]
        ];


?>


    
    <div class="container">
        <div class="row">
            <?php foreach ($cursos as $curso => $infoCursos):?>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="<?php echo "assets/img/$infoCursos[2]"; ?>" alt="<?php echo "Foto curso $nomeCurso"; ?>">
                    <div class="caption">
                        <h3><?php echo $curso; ?></h3>
                        <p><?php echo $infoCursos[0]; ?></p>
                        <p>Valor R$ <?php echo number_format($infoCursos[1],2,',','.'); ?></p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                        data-target="<?php echo "#$infoCursos[3]";?>">Comprar</button>

                    </div>
                </div>
            </div>
            <?php endforeach ;?>

            <?php foreach($cursos as $nomeCurso => $infoCursos):?>
                   <!-- Modal -->

                    <div class="modal fade" id="<?php echo $infoCursos[3]; ?>" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Preencha com seus dados!</h4>
                                </div>
                                <div class="modal-body">
                                    <h4>Curso de :<?php echo $nomeCurso; ?></h4>
                                    <h2>Valor R$ <?php echo number_format($infoCursos[1],2,',','.'); ?></h2>
                                  <form action="validarCompra.php" method="post">
                                  <input type="hidden" name="curso" value="<?php echo $nomeCurso;?>">
                                    <input type="hidden" name="preco" value="<?php echo number_format($infoCursos[1],2,',','.');?>">
                                    <div class="input-group col-md-5">
                                        <label for="nomeCompleto">Nome Completo:</label>
                                        <input type="text" id="nomeCompleto" name="nomeCompleto" class="form-control">
                                    </div>
                                    <div class="input-group col-md-5">
                                        <label for="cpf">CPF:</label>
                                        <input type="number" id="cpf" name= "cpf" class="form-control">
                                    </div>                                    <div class="input-group col-md-5">
                                        <label for="numeroCartao">Numero Cartão:</label>
                                        <input type="number" id="numeroCartao" name="numeroCartao" class="form-control">
                                    </div>                                    
                                    <div class="input-group col-md-5">
                                        <label for="validadeCartao">Validdade:</label>
                                        <input type="month" id="validadeCartao" name="validadeCartao" class="form-control">
                                    </div>
                                    <div class="input-group col-md-5">
                                        <label for="cvvCartao">CVV:</label>
                                        <input type="text" id="cvvCartao" name="cvvCartao" class="form-control">
                                    </div>
                                     <div class="input-group col-md-5">
                                        <button type="submit" class="btn btn-default">comprar</button>
                                    </div>

                                 </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>

                        </div>
                    </div>
            <?php endforeach;?>
        </div>
    </div>
<?php

?>