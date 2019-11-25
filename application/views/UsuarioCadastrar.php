<?php $this->load->view('template/header'); ?>




<div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Cadastrar Novo Usuario
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <form action="<?php echo base_url(); ?>index.php/Usuario/Cadastrar" method="post"> 
                            <div class="form-group">
                                <label for="cep">Nome: </label>
                                <input type="text" name="Nome" id="Nome" class="form-control" autofocus required />
                            </div>
                            <div class="form-group">
                                <label for="cep">Email:</label>
                                <input type="text" name="Email" id="Email" class="form-control" autofocus required  />
                            </div>
                            <div class="form-group">
                                <label for="cep">Senha:</label>
                                <input type="text" name="Senha" id="Senha" class="form-control" autofocus required  />
                            </div>
                            <div class="form-group">
                                <label for="cep">CEP: </label>
                                <input type="text" name="cep" id="cep" class="form-control" autofocus required  />
                            </div>
                            <!-- <div class="form-group">
                                <button id="btn_consulta" class="btn btn-success">Consultar</button>
                            </div> -->
                            <div class="form-group">
                                <label for="rua_usuario">Rua:</label>
                                <input type="text" name="rua_usuario" id="rua_usuario"  class="form-control" readonly="readonly" />
                            </div>
                            <div class="form-group">
                                <label for="bairro_usuario">Bairro:</label>
                                <input type="text" name="bairro_usuario" id="bairro_usuario" class="form-control" readonly="readonly" />
                            </div>
                            <div class="form-group">
                                <button id="btn_enviar" class="btn btn-outline-primary">Enviar</button>
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
            <?php if(isset($msgAlert)): echo $msgAlert; endif?>
 </div>

        

 <script src="<?=base_url();?>assets/js/UsuarioView.js"></script>
<?php $this->load->view('template/footer'); ?>
