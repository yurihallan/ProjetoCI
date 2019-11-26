<?php $this->load->view('template/header'); ?>




<div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="container"> Cadastrar Novo Produto</h4>
                </div>
                <div class="panel-body">
                    <form action="<?php echo base_url(); ?>index.php/Produto/Cadastrar" method="post">
                        <div class="col-md-12">
                               
                                <div class="form-group">
                                    <label for="cep"><span style="color:red;">*</span>Nome: </label>
                                    <input type="text" name="Nome" id="Nome" class="form-control" autofocus required />
                                </div>
                                <div class="form-group">
                                    <label for="cep"><span style="color:red;">*</span>Preço:</label>
                                    <input type="text" name="Preco" id="Preco" class="form-control" autofocus required  />
                                </div>
                            
                            
                                <div class="form-group">
                                    <button id="btn_enviar_produto" class="btn btn-outline-primary">Enviar</button>
                                </div>
                              
                        </div>
                    </form>     
                </div>
            </div>
            <?php if(isset($msgAlert)): echo $msgAlert; endif?>
 </div>

        


 
<?php $this->load->view('template/footer'); ?>
