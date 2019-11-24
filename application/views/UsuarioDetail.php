<?php $this->load->view('template/header'); ?>

<h2>Usuário</h2>

<?php if(isset($msgAlert)): echo  $msgAlert; endif?> 


<a  class="btn btn-success" href="<?php echo base_url(); ?>index.php/Usuario/view_cadastrar">Novo Usuário</a>
<hr>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Cep</th>
      <th scope="col">Rua</th>
      <th scope="col">Bairro</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>
      
    </tr>
  </thead>
  <tbody>
    
    <?php $v=1;?>
    <?php  foreach($valor as $val): ?>
        <tr>    
            <th scope="row"><?php echo $v++; ?> </th>
            <td><?php echo $val->Usuario_Nome; ?></td>
            <td><?php echo $val->Usuario_Email; ?></td>
            <td><?php echo $val->Usuario_Cep; ?></td>
            <td><?php echo $val->Usuario_Rua; ?></td>
            <td><?php echo $val->Usuario_Bairro; ?></td>
            <td><a name="btn_editar" id="btn_editar" class="btn btn-info" href="<?php echo base_url(); ?>index.php/Usuario/editar?id=<?= $val->Id_Usuario;?>" role="button">Editar</a> </td>
            <td><a name="btn_remover" id="btn_remover" onclick="myFunction()" class="btn btn-danger" href="<?php echo base_url(); ?>index.php/Usuario/Deletar?id=<?= $val->Id_Usuario;?>" role="button">Remover</a></td>
         </tr>
    <?php endforeach; ?>
        
        
 
  </tbody>
</table>




<?php $this->load->view('template/footer'); ?>
