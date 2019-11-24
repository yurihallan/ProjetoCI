<?php $this->load->view('template/header'); ?>




<div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Cadastrar Novo Produto
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        
                        <div class="form-group">
                            <label for="cep">Nome: </label>
                            <input type="text" name="Nome" id="Nome" class="form-control" autofocus required="" />
                        </div>
                        <div class="form-group">
                            <label for="cep">Preço:</label>
                            <input type="text" name="Preco" id="Preco" class="form-control" autofocus required=""  />
                        </div>
                       
                       
                        <div class="form-group">
                            <button id="btn_enviar_produto" class="btn btn-outline-primary">Enviar</button>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php if(isset($msgAlert)): echo $msgAlert; endif?>
 </div>

        


<?php $this->load->view('template/footer'); ?>
