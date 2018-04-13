<?php
    namespace App\controllers;
    use App\Libs\phpmailer\phpmailer\src\Exception;
    use App\Libs\sendgrid\sendgrid\lib\SendGrid\Email;
    use App\Libs\sendgrid\sendgrid\lib\SendGrid;
   
   
  
    class controlleMail{  
        public function envioSendgrid(){
                    /* This example is used for sendgrid-php V2.1.1 (https://github.com/sendgrid/sendgrid-php/tree/v2.1.1)
                        https://docs.microsoft.com/pt-br/azure/store-sendgrid-php-how-to-send-email
                */
                 
                //get dados
                $assunto = isset($_POST['assunto'])?$_POST['assunto']:" ";
                $emailDe = isset($_POST['emailDe'])?$_POST['emailDe']:" ";
                $emailPara = isset($_POST['emailPara'])?$_POST['emailPara']:" ";
                $message = isset($_POST['mensagem'])?$_POST['mensagem']:" ";
                
              //  echo $message;
                
                //echo $assunto." ".$emailDe." ".$emailPara." ".$message; 
                $email = new Email();
                // The list of addresses this message will be sent to
                // [This list is used for sending multiple emails using just ONE request to SendGrid]
               /* $toList = array($emailParaC,'jhsbgs@gmail.com');//lista de usuario para enviar email
            
                // Specify the names of the recipients
                $nameList = array('User1','User2');
            
                // Used as an example of variable substitution
                $timeList = array('4 PM','5 PM');
            
                // Set all of the above variables
                 $email->setTos($toList);
                 $email->addSubstitution('-name-', $nameList);
                 $email->addSubstitution('-time-', $timeList);
            
                // Specify that this is an initial contact message
                $email->addCategory("initial");
            
                // You can optionally setup individual filters here, in this example, we have
                // enabled the footer filter
                $email->addFilter('footer', 'enable', 1);
                $email->addFilter('footer', "text/plain", "Thank you for your business");
                $email->addFilter('footer', "text/html", "Thank you for your business");
            */
                // The subject of your email
                $subject = $assunto;
            
                // Where is this message coming from. For example, this message can be from
                // support@yourcompany.com, info@yourcompany.com
                $from = $emailDe;
            
                // If you do not specify a sender list above, you can specifiy the user here. If
                // a sender list IS specified above, this email address becomes irrelevant.
                $to = $emailPara;
            
                # Create the body of the message (a plain-text and an HTML version).
                # text is your plain-text email
                # html is your html version of the email
                # if the receiver is able to view html emails then only the html
                # email will be displayed
            
                /*
                * Note the variable substitution here =)
                */
                //escolher em usar uma mensagem normal ou um texto html
                $text = $message; 
               /*$text = "
                Hello -name-,
                Thank you for your interest in our products. We have set up an appointment to call you at -time- EST to discuss your needs in more detail.
                Regards,
                Fred";*/
            
               /* $html = "
                <html>
                <head></head>
                <body>
                <p>Olá -name-,<br>
                 Aqui Fica seu HTML.
            
                Regards,
            
                Fred<br>
                </p>
                </body>
                </html>";*/



                $html = "<table align='center' border='0' cellpadding='0' cellspacing='0' style='width:600px'>
                <tbody>
                    <tr>
                        <td>
                        <table border='0' cellpadding='0' cellspacing='0' style='width:100%>
                            <tbody>
                                <tr>
                                    <td style='width:208px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/1.jpg' border='0' style='display:block;'></td>
                                    <td style='width:392px;padding-right:22px;'>
                                    <table align='right' border='0' cellpadding='0' cellspacing='0' style='width:138px'>
                                        <tbody>
                                            <tr>
                                                <td><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/2.jpg' border='0' style='display:block;'></td>
                                                <td><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/3.jpg' border='0' style='display:block;'></td>
                                                <td><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/4.jpg' border='0' style='display:block;'></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/5.jpg' border='0' style='display:block;'></td>
                    </tr>
                    <tr>
                        <td style='padding-bottom:30px;'>
                        <table border='0' cellpadding='0' cellspacing='0' style='width:100%'>
                            <tbody>
                                <tr>
                                    <td style='width:80px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/6.jpg' border='0' style='display:block;'></td>
                                    <td bgcolor='#347d86' style='width:520px;font-family:Arial;color:#FFFFFF;font-size:20px'  align='center' >Lorem ipsum dolor sit amet, consectetuer adipiscing</td>
                                </tr>
                                <tr>
                                    <td valign='top' style='width:80px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/7.jpg' border='0' style='display:block;'></td>
                                    <td >
                                    <table border='0' cellpadding='0' cellspacing='0' style='width:520px'>
                                        <tbody>
                                            <tr>
                                                <td colspan='2' style='font-family:Arial;color:#FFFFFF;font-size:15px'>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:15px;font-family:Arial;color:#000000;font-size:17px;text-align:right;'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</td>
                                                <td valign='top' rowspan='2' style='width:230px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/18.jpg' border='0' width='230' style='width:230px;display:block;'></td>
                                            </tr>
                                            <tr>
                                                <td style='padding-right:15px;'>
                                                <table align='right' border='0' cellpadding='0' cellspacing='0' style='width:100px'>
                                                    <tbody>
                                                        <tr>
                                                            <td bgcolor='#f67a34' align='center' style='font-family:Arial;color:#FFFFFF;font-size:18px;'><span style='color:#FFFFFF'><a href='' style='color:#FFFFFF;text-decoration:none;'>Leia +</a></span></td>
                                                            <td style='width:16px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/8.jpg' border='0' style='display:block;'></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/9.jpg' border='0' style='display:block;'></td>
                    </tr>
                    <tr>
                        <td style='padding-bottom:30px;'>
                        <table border='0' cellpadding='0' cellspacing='0' style='width:100%'>
                            <tbody>
                                <tr>
                                    <td style='width:80px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/10.jpg' border='0' style='display:block'></td>
                                    <td bgcolor='#e37262' style='width:520px;font-family:Arial;color:#FFFFFF;font-size:20px'  align='center' >Lorem ipsum dolor sit amet, consectetuer adipiscing</td>
                                </tr>
                                <tr>
                                    <td valign='top' style='width:80px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/11.jpg' border='0' style='display:block;'></td>
                                    <td >
                                    <table border='0' cellpadding='0' cellspacing='0' style='width:520px'>
                                        <tbody>
                                            <tr>
                                                <td colspan='2' style='font-family:Arial;color:#FFFFFF;font-size:15px'>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:15px;font-family:Arial;color:#000000;font-size:17px;text-align:right;'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</td>
                                                <td valign'top' rowspan='2' style='width:230px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/18.jpg' border='0' width='230' style='width:230px;display:block;'></td>
                                            </tr>
                                            <tr>
                                                <td style='padding-right:15px;'>
                                                <table align='right' border='0' cellpadding='0' cellspacing='0' style='width:100px'>
                                                    <tbody>
                                                        <tr>
                                                            <td bgcolor='#eda14d' align='center' style='font-family:Arial;color:#FFFFFF;font-size:18px;'><span style='color:#FFFFFF'><a href='' style='color:#FFFFFF;text-decoration:none;'>Leia +</a></span></td>
                                                            <td style='width:16px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/12.jpg' border='0' style='display:block;'></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/13.jpg' border='0' style='display:block;'></td>
                    </tr>
                    <tr>
                        <td style='padding-bottom:30px;'>
                        <table border='0' cellpadding='0' cellspacing='0' style='width:100%'>
                            <tbody>
                                <tr>
                                    <td style='width:80px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/14.jpg' border='0' style='display:block;'></td>
                                    <td bgcolor='#a05f7f' style='width:520px;font-family:Arial;color:#FFFFFF;font-size:20px'  align='center' >Lorem ipsum dolor sit amet, consectetuer adipiscing</td>
                                </tr>
                                <tr>
                                    <td valign='top' style='width:80px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/15.jpg' border='0' style='display:block;'></td>
                                    <td>
                                    <table border='0' cellpadding='0' cellspacing='0' style='width:520px'>
                                        <tbody>
                                            <tr>
                                                <td colspan='2' style='font-family:Arial;color:#FFFFFF;font-size:15px'>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td valign='top' style='padding-right:15px;font-family:Arial;color:#000000;font-size:17px;text-align:right;'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</td>
                                                <td valign='top' rowspan='2' style='width:230px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/18.jpg' border='0' width='230' style='width:230px;display:block;'></td>
                                            </tr>
                                            <tr>
                                                <td style='padding-right:15px;'>
                                                <table align='right' border='0' cellpadding='0' cellspacing='0' style='width:100px'>
                                                    <tbody>
                                                        <tr>
                                                            <td bgcolor='#4a485d' align='center' style='font-family:Arial;color:#FFFFFF;font-size:18px;'><span style='color:#FFFFFF'><a href='' style='color:#FFFFFF;text-decoration:none;'>Leia +</a></span></td>
                                                            <td style='width:16px'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/16.jpg' border='0' style='display:block;'></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table align='right' border='0' cellpadding='0' cellspacing='0' style='width:600px'>
                                <tbody>
                                    <tr>
                                        <td bgcolor='#cccccc' style='width: 396px;font-family:Arial;color:#999999;font-size:15px;padding-left:10px;'>Lorem ipsum dolor sit amet, consectetuer adipiscing consectetuer adipiscing consectetuer adipiscing</td>
                                        <td bgcolor='#cccccc' style='width: 170px;font-family:Arial;color:#999999;font-size:15px'>Fone: (11) 99999-9999</td>
                                        <td style='width: 34px;'><img src='http://emailmarketingtemplates.com.br/templates/newsletter/news-family/17.jpg' border='0' style='display:block;'></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>";
            
                // set subject
                $email->setSubject($subject);
            
                // attach the body of the email
                $email->setFrom($from);
                //$email->setHtml($html);
                $email->addTo($to);
                $email->setText($text);
            
               // print_r($email);
                // Your SendGrid account credentials
                $username = 'Seu usuario do sendGrind';
                $password = 'sua senha do sendGrid';
            
                // Create SendGrid object
                $sendgrid = new SendGrid($username, $password);
            
                // send message
                $response = $sendgrid->send($email);
                //print_r($response);
                $status = $response->message; // [message] => success
                
                if($status == 'success'){
                    echo $status;
                }else{
                    echo $status;
                }
               
               
                           
                
        }     
    }
