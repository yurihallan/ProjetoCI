$(document).ready(function(){

    $("#btn_enviar_produto").click(function(){
        var nome =  $('#Nome').val();
        var preco =  $('#Preco').val();
    

        if( !$('#Nome').val()  || !$('#Preco').val() )
        {
        alert("Preencha os campos obrigatórios");
        }else{

        $.post('Cadastrar',
        {
            nome,
            preco
        },)

        }
    });


    $("#data").mask('99/99/9999');

});   