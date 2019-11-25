$(document).ready(function(){

   $("#cep").change(function(){

      var cep = $("#cep").val();


      var url = 'https://viacep.com.br/ws/'+ cep +'/json/';

      $.ajax({
         url: url,
         type:"get",
         datatype: "json",
         success: function(data){
            console.log(data);

            $("#rua_usuario").val(data.logradouro);
            $("#bairro_usuario").val(data.bairro);

         },
         error: function(erro){
            console.log(erro);
         }

      })

   });






});