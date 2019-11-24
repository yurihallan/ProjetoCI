$(document).ready(function(){

   $("#btn_consulta").click(function(){

      var cep = $("#cep").val();


      var url = 'https://viacep.com.br/ws/'+ cep +'/json/';

      $.ajax({
         url: url,
         type:"get",
         datatype: "json",
         success: function(data){
            console.log(data);

            $("#rua").val(data.logradouro);
            $("#bairro").val(data.bairro);

         },
         error: function(erro){
            console.log(erro);
         }

      })

   });





   $("#btn_enviar").click(function(){
      
      var nome =  $('#Nome').val();
      var email =  $('#Email').val();
      var senha =  $('#Senha').val();
      var cep = $('#cep').val();
      var rua =  $('#rua').val();
      var bairro =  $('#bairro').val();

      if( !$('#Nome').val()  || !$('#Email').val() ||
          !$('#Senha').val() || !$('#cep').val()   ||
          !$('#rua').val()  || ! $('#bairro').val())
      {
         alert("Preencha os campos obrigatórios");
      }else{

         $.post('Cadastrar',
         {
            nome,
            email,
            senha,
            cep,
            rua,
            bairro
         },)

      }

   });




   function myFunction() {
      var res = confirm("Press a button!");
      if(res)
         alert("ok");
      
    }







});