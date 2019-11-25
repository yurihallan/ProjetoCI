<?php $this->load->view('template/header'); ?>



<div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Atualizar Usuario
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <form action="<?php echo base_url(); ?>index.php/Usuario/update" method="post">
                            <?php foreach($valor as $val): ?>
                                <div class="form-group">
                                    <label for="cep">Nome: </label>
                                    <input type="hidden" name="id" value="<?php echo $val->Id_Usuario;?>">
                                    <input type="text" name="Nome" id="Nome" class="form-control"  value="<?php echo $val->Usuario_Nome;?>"  autofocus required  />
                                </div>
                                <div class="form-group">
                                    <label for="cep">Email:</label>
                                    <input type="text" name="Email" id="Email" class="form-control"  value="<?php echo $val->Usuario_Email;?>"  autofocus required />
                                </div>
                                <div class="form-group">
                                    <label for="cep">Senha:</label>
                                    <input type="text" name="Senha" id="Senha" class="form-control" value="<?php echo $val->Usuario_Senha;?>" autofocus required/>
                                </div>
                                <div class="form-group">
                                    <label for="cep">CEP: </label>
                                    <input type="text" name="cep" id="cep" class="form-control" value="<?php echo $val->Usuario_Cep;?>" autofocus required />
                                </div>
                               
                                <div class="form-group">
                                    <label for="rua_usuario">Rua:</label>
                                    <input type="text" name="rua_usuario" id="rua_usuario" class="form-control" value="<?php echo $val->Usuario_Rua;?>"  required />
                                </div>
                                <div class="form-group">
                                    <label for="bairro_usuario">Bairro:</label>
                                    <input type="text" name="bairro_usuario" id="bairro_usuario" class="form-control" value="<?php echo $val->Usuario_Bairro;?>"  required />
                                </div>
                                <div class="form-group">
                                    <button id="btn_atualizar" class="btn btn-outline-primary">Atualizar</button>
                                </div>
                            <?php endforeach; ?>
                        </form>                                
                    </div>
                </div>
            </div>
            <?php if(isset($msgAlert)): echo $msgAlert; endif?>
 </div>

        

 <script src="<?=base_url();?>assets/js/UsuarioView.js"></script>
<?php $this->load->view('template/footer'); ?>
