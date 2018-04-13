<?php


    namespace App;
    use App\Controllers\controlleMail;
    use App\Controllers\controlleMailGithub;
   
    class app{
      
        public function index(){
            $passo = (isset($_GET['p']))? $_GET['p']:"";
          

        
          

            switch ($passo){
               
                case "enviar":
                   $email = new controlleMail();
                   $email->envioSendgrid();

                   
                    break;
                default:
                    require_once("Views/email.tpl.php");
            }

           

        }

       
    }