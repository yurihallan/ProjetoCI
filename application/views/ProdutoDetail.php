<?php $this->load->view('template/header'); ?>


<h2>Produtos</h2>

<?php if(isset($msgAlert)): echo  $msgAlert; endif?> 


<a  class="btn btn-success" href="<?php echo base_url(); ?>index.php/Produto/view_produto">Novo Produto</a>
<hr>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Data de Criação</th>
      <th scope="col">Data de Alteração</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>
      
    </tr>
  </thead>
  <tbody>
    
    <?php $v=1;?>
    <?php  foreach($valor as $val): ?>
        <tr>    
            <th scope="row"><?php echo $v++; ?> </th>
            <td><?php echo $val->Produto_Nome; ?></td>
            <td><?php echo $val->Produto_Preco; ?></td>
            <td id="data" ><?php echo $val->Produto_Data_Criacao; ?></td>
            <td id="data" ><?php echo $val->Produto_Data_Alteracao; ?></td>
            <td><a name="btn_editar" id="btn_editar" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Produto/editar?id=<?= $val->idProdutos;?>" role="button">Editar</a> </td>
            <td><a name="btn_remover" id="btn_remover" onclick="myFunction()" class="btn btn-danger" href="<?php echo base_url(); ?>index.php/Produto/Deletar?id=<?= $val->idProdutos;?>" role="button">Remover</a></td>
         </tr>
    <?php endforeach; ?>
        
        
 
  </tbody>
</table>




<script src="<?=base_url();?>assets/js/ProdutoView.js"></script>
<?php $this->load->view('template/footer'); ?>
