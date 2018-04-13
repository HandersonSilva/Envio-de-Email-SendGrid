
    $(document).ready(function(){
        //pegando o submit do form
        $("#frmEmail").submit(function(e){
            //previnir o envio do formulario
            e.preventDefault();
            $.ajax({
            type:"POST",
            url:"index.php?p=enviar",
            data:$(this).serialize(),
            success:function(message){
             // alert(message);
            // $('#status').append(data);
           if(message == "success"){
           /* document.getElementById('divAlert').innerHTML = "<div class='alert alert-success' role='alert'>"+
            "<h4 class='alert-heading'>Well done!</h4>"+
            "<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>"+
            "<hr>"+"</div>";*/
              
                   $('#divAlert').html("<div class='alert alert-success' role='alert'>"+
                    "<h4 class='alert-heading'>Ok, Email Enviado com Sucesso!!!</h4>"+"<hr>"+
                    "<p>Para comprovar o envio verifique seu email.</p>"+"Status: "+message+
                    "</div>");
                    //esconder o alerta
                    $('#divAlert').show();
                    $('#divAlert').fadeOut(10000);
                   /* //zerar campos
                    $("#assunto").val("");
                    $("#emailDe").val("");
                    $("#emailPara").val("");
                    $("#mensagem").val("");*/
                }else{
                    $('#divAlert').html("<div class='alert alert-danger' role='alert'>"+
                    "<h4 class='alert-heading'>HÔ..., Falha ao enviar o email.</h4>"+ "<hr>"+
                    "<p>Verifique se os dados estão corretos.</p>"+"Status: "+message+
                    "</div>");
                    $('#divAlert').show();
                    $('#divAlert').fadeOut(10000);
                }
               // window.location = "sucesso.php";*/
            },
            error: function (result) {
                // Como requisitar $resposta e mostrar ela aqui
            }
        });

        });
    });
      
  
    
    
  /*  //retorno da imagem
    $(document).ready(function(){
        $('#file').on('change',function(){
               $('#visualizar').html('<img src="ajax-loader.gif" alt="Enviando..."/> Enviando...');
               /* Efetua o Upload 
               $('#formulario').ajaxForm({
                   target:'#visualizar' // o callback será no elemento com o id #visualizar
               }).submit();
           });
        });*/
       

   /* //Implementação de mascaras com jquery
    $(document).ready(function(){
        jQuery(function($){
            $("#cpf").mask("999.999.999-99");
            $("#cel").mask("(99)99999-9999");
            $("#celWhats").mask("(99)99999-9999");
            $("#cep").mask("99.999-999");
            });
    });*/

