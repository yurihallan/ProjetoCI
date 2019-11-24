<?php $this->load->view('template/header'); ?>




<div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Atualizar Produto
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                    <form action="<?php echo base_url(); ?>index.php/Produto/update" method="post">
                            <?php foreach($valor as $val): ?>
                                <div class="form-group">
                                    <label for="cep">Nome: </label>
                                    <input type="hidden" name="id" value="<?php echo $val->idProdutos;?>">
                                    <input type="text" name="Nome" id="Nome" class="form-control"  value="<?php echo $val->Produto_Nome;?>"  autofocus required  />
                                </div>
                                <div class="form-group">
                                    <label for="cep">Preço:</label>
                                    <input type="text" name="Preco" id="Preco" class="form-control"  value="<?php echo $val->Produto_Preco;?>"  autofocus required />
                                </div>
                              
                                <div class="form-group">
                                    <button id="btn_atualizar" class="btn btn-outline-primary">Atualizar</button>
                                </div>
                            <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php if(isset($msgAlert)): echo $msgAlert; endif?>
 </div>

        


<?php $this->load->view('template/footer'); ?>
