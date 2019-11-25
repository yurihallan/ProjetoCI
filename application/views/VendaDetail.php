<?php $this->load->view('template/header'); ?>

<h2>Venda</h2>

<?php if(isset($msgAlert)): echo  $msgAlert; endif?> 


<a  class="btn btn-success" href="<?php echo base_url(); ?>index.php/Venda/view_venda">Nova Venda</a>
<hr>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Numero da Venda</th>
      <th scope="col">Vendendor Responsavel</th>
      <th scope="col">Data da Venda</th>
      <th scope="col">Produto em Venda</th>
      <th scope="col">Preço do Produto</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>
      
    </tr>
  </thead>
  <tbody>
  
    <?php $v=1;?>
    <?php  foreach($valor as $val): ?>
        <tr>    
            <th scope="row"><?php echo $v++; ?> </th>
            <td><?php echo $val->Numero_Venda; ?></td>
            <td><?php echo $val->Vendendor_responsavel; ?></td>
            <td><?php echo $val->Data_Venda; ?></td>
            <td><?php echo $val->Produto_Nome; ?></td>
            <td><?php echo $val->Produto_Preco; ?></td>
            
            <td><a name="btn_editar" id="btn_editar" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Venda/editar?id=<?= $val->idVENDA;?>" role="button">Editar</a> </td>
            <td><a name="btn_remover" id="btn_remover"  class="btn btn-danger" href="<?php echo base_url(); ?>index.php/Venda/Deletar?id=<?= $val->idVENDA;?>" role="button">Remover</a></td>
         </tr>
    <?php endforeach; ?>
        
        
 
  </tbody>
</table>




<?php $this->load->view('template/footer'); ?>
