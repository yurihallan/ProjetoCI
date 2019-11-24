<?php $this->load->view('template/header'); ?>



     <div class="jumbotron ">
        <h1 > Professor</h1>
    
    
        <hr class="my-4">

               
                    

            <!-- Form Name -->
            <legend class="border "  >Cadastrar Professor</legend>
            <form class="form-horizontal"   method="post" action="<?php echo base_url(); ?>index.php/Professor/cadastrar_professor"> 
                  
               
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="nome_professor">Nome</label>  
                        <div class="col-xs">
                            <input id="nome_professor" name="nome_professor" type="text" placeholder="Nome do Professor" class="form-control input-xs" required="">
                        </div>
                    </div>
                    <!-- Text date-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="dt_nasc_Professor">data de nascimento</label>  
                        <div class="col-xs">
                            <input id="dt_nasc_Professor" name="dt_nasc_Professor" type="date" placeholder="data de nascimento" class="form-control date-xs"  required="" >
                        </div>
                    </div>   
                        
                    <div class="form-group">
                        <button class="btn btn-outline-primary" id="Enviar" type="submit">Enviar</button>
                    </div>
              
                   
            </form>
            
        <?php if(isset($msgAlert)): echo  $msgAlert; endif?>
       
    </div> 

   
<?php $this->load->view('template/footer'); ?>