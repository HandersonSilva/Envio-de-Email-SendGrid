
<!DOCTYPE html>
<html>
    <head>
        <title>Envio de Email </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <link rel="stylesheet" type="text/css" href="public/css/styleLogin.css"/>
    </head>
<body>


    <div class="container">
            
            <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="index.php?p=enviar" method="post">
                            <label for="Nome">Nome:</label>
                            <input type="text" name="Nome" size="35" />

                            <label for="Email">E-mail:</label>
                            <input type="text" name="Email" size="35" />

                            <label for="Fone">Telefone:</label>
                            <input type="text" name="Fone" size="35" />

                            <label for="Mensagem">Mensagem:</label>
                            <textarea name="Mensagem" rows="8" cols="40"></textarea>

                            <input type="submit" name="Enviar" value="Enviar" />
                        </form>
                    </div>
                <div class="col-md-3"></div>
                
            </div> 
    </div>
           

</body>
</html>