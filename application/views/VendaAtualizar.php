<?php $this->load->view('template/header'); ?>




<div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Atualizar Venda
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <form action="<?php echo base_url(); ?>index.php/Venda/update" method="post">
                            
                            
                            <div class="form-group">
                                <label for="Numero_Venda"><span style="color:red;">*</span>Numero da Venda:  </label>
                                <?php foreach($valor as $val): ?>
                                    <input type="hidden" name="idvenda" id="idvenda" value="<?php echo $val->idVENDA;?>">
                                    <input type="number" name="Numero_Venda" id="Numero_Venda"  value="<?php echo $val->Numero_Venda;?>"  class="form-control" autofocus required />
                                <?php endforeach; ?>
                            </div>

                        

                            <div class="form-group">
                                <label for="Vendendor_responsavel">Vendendor Responsavel:</label>
                                <select name="Vendendor_responsavel" id="Vendendor_responsavel" class="form-control"  required>
                                        <option value="">Escolha um vendendor responsável</option>
                                            <?php foreach($usuario as $resp): ?>
                                                <option value="<?php echo $resp->Id_Usuario.'/'.$resp->Usuario_Nome; ?>">  <?php echo $resp->Usuario_Nome; ?>     </option>
                                            <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Data_Venda">Data da Venda: </label>
                                <?php foreach($valor as $val): ?>
                                    <?php $data = substr($val->Data_Venda, 0,11); ?>
                                    <input type="date" name="Data_Venda" id="Data_Venda"  value="<?php echo $data; ?>" class="form-control" autofocus required>
                                <?php endforeach; ?>      
                                                       
                            </div>
                        
                            <div class="form-group">
                                <label for="horario">Horário da Venda: </label>
                                <?php foreach($valor as $val): ?>
                                    <?php $hour = substr($val->Data_Venda, -8); ?>
                                    <input id="horario" type="time" name="horario" step="2" value="<?php echo $hour; ?>" class="form-control" required>
                                <?php endforeach; ?>      
                            </div>                    
                            <div class="form-group">
                                <label for="Produto_Nome">Nome do Produto:</label>
                                <select name="Produto_Nome" id="Produto_Nome" class="form-control" required>
                                        <option value="">Escolha um produto</option>
                                            <?php foreach($produtos as $product): ?>
                                                <option value="<?php echo $product->idProdutos; ?>">  <?php echo $product->Produto_Nome; ?>     </option>
                                            <?php endforeach; ?>
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <button id="btn_enviar_atualizar" class="btn btn-outline-primary">Atualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php if(isset($msgAlert)): echo $msgAlert; endif?>
 </div>

        

 
<?php $this->load->view('template/footer'); ?>
