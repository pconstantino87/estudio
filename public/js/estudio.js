$(function(){
    $("#enviar").click(function(){
        $.post('cadastrar-cliente',$("form[name='cliente']").serialize(),function(data){
            resposta = $.parseJSON(data);    
            if(resposta.erro == 1){
                //erro
            }else{
                //sucesso
            }
        });
    });
});