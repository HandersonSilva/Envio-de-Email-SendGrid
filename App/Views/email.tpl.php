<!DOCTYPE html>
<html>
    <head>
        <title>Envio de Email </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
         
        
         <script  src="public/js/jquery.js"></script>
         <script  src="public/js/script.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
    </head>
<body>


    <div class="container" id="container">
            <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page"><p style="color:black"><b>Envio de Email com SendGrid</b></p></li>
                    </ol>
            </nav>
              <div class="row">      
                <div class="col-md-4">
                    <div class="jumbotron">
                        <h1 class="display-4">SendGrid</h1>
                        <p class="lead">Ferramenta de envio de email.</p>
                        <p class="lead">A SendGrid oferece infraestrutura de e-mails na nuvem, com suporte 24 horas e oferta de serviços adicionais, como relatórios de métricas para acompanhamento de desempenho.</p>
                        <hr class="my-4">
                        <p>Saiba mas em <a href="https://sendgrid.com/about">SendGrid</a></p>
                        
                      </div>
                </div>
                 <div class="col-md-6">
                        <form  method="post" id="frmEmail">
                            <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Assunto</span>
                                    </div>
                                    <input type="text" class="form-control"  required id="assunto" name="assunto" placeholder="Teste SendGrid" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                                
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">De</span>
                            </div>
                            <input type="email" name="emailDe" id="emailDe" class="form-control" required placeholder="email@example.com" aria-label="Email" aria-describedby="basic-addon1">
                        </div>
                    
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Para</span>
                                </div>
                                <input type="email" name="emailPara"  id="emailPara" class="form-control" required placeholder="email@example.com" aria-label="Email" aria-describedby="basic-addon1">
                        </div>
                    
                        <div class="input-group" id="textArea">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Mensagem </span>
                            </div>
                            <textarea class="form-control"  id="mensagem" name="mensagem" required aria-label="With textarea"></textarea>
                        </div>
                        <br/>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                    <br/>
                    <div  id="divAlert">
                            
                    </div>
                  
                   

                <div class="col-md-2"></div>
                
            </div> 
    </div>
   
    
</body>
</html>