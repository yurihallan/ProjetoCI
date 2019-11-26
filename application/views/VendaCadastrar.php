<?php $this->load->view('template/header'); ?>




<div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="container">Cadastrar Nova Venda</h4>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="<?php echo base_url(); ?>index.php/Venda/Cadastrar" method="post">
                            <div class="form-group">
                                <label for="Numero_Venda"><span style="color:red;">*</span>Numero da Venda: </label>
                                <input type="number" name="Numero_Venda" id="Numero_Venda" class="form-control" autofocus required />
                            </div>

                        

                            <div class="form-group">
                            <label for="Vendendor_responsavel"><span style="color:red;">*</span>Vendendor Responsavel:</label>
                            <select name="Vendendor_responsavel" id="Vendendor_responsavel" class="form-control" required >
                                    <option value="">Escolha um vendendor responsável</option>
                                        <?php foreach($usuario as $resp): ?>
                                            <option value="<?php echo $resp->Id_Usuario.'/'.$resp->Usuario_Nome; ?>">  <?php echo $resp->Usuario_Nome; ?>     </option>
                                        <?php endforeach; ?>
                            </select>
                            </div>

                            <div class="form-group">
                                <label for="Data_Venda"><span style="color:red;">*</span>Data da Venda: </label>
                                <input type="date" name="Data_Venda" id="Data_Venda" class="form-control" autofocus required />

                            </div>
                        
                        <div class="form-group">
                                <label for="horario"><span style="color:red;">*</span>Horário da Venda: </label>
                                <input id="horario" type="time" name="horario"   class="form-control" required>
                            </div>                    
                            <div class="form-group">
                            <label for="Produto_Nome"><span style="color:red;">*</span>Nome do Produto:</label>
                            <select name="Produto_Nome" id="Produto_Nome" class="form-control" autofocus required>
                                    <option value="">Escolha um produto</option>
                                        <?php foreach($produtos as $product): ?>
                                            <option value="<?php echo $product->idProdutos; ?>">  <?php echo $product->Produto_Nome; ?>    </option>
                                        <?php endforeach; ?>
                            </select>
                            </div>
                        
                            <div class="form-group">
                                <button id="btn_enviar_venda" class="btn btn-outline-primary">Enviar</button>
                            </div>
                        </form>       
                    </div>
                </div>
            </div>
            <?php if(isset($msgAlert)): echo $msgAlert; endif?>
 </div>

        

 
<?php $this->load->view('template/footer'); ?>
