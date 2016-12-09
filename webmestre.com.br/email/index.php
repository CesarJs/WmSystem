<?php
        include("../includes/globais.php");
      /*$sql="SELECT emailEmpresa from dadosempresa;";
      $RS  = mysql_query($sql);
      mysql_close();*/
      $dominio="webmestre.com.br";
      $icone=$url."imagens/logo.png";
      // busca a biblioteca recaptcha
      require_once "recaptchalib.php";


      // sua chave secreta
        $secret = "6LevCBwTAAAAAHG6UlhCmZVEtKRl1tIhh2YDihtt";
         
        // resposta vazia
        $response = null;
         
        // verifique a chave secreta
        $reCaptcha = new ReCaptcha($secret);

        // se submetido, verifique a resposta
        if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
                $_SERVER["REMOTE_ADDR"],
                $_POST["g-recaptcha-response"]
            );        }


     if ($response != null && $response->success) {
       
        $data                   = date("d/m/Y - H:i");
                $nome                   = $_POST['nome'];
                $email                  = $_POST['email'];
                $info                   = $_POST['mensagem'];


        $resp='Olá '.$_POST['nome'].",<br />";
        $resp.="Recebemos sua duvida sobre: ".$_POST['assunto'];
        $html='
         <html>
          <head>
          <title>HTML email</title>
        </head>
        <body style="background-color:#F5F3F3">
        <div style="border:1px solid darkblue; width:80%;margin-left:10%;overFlow:auto">
        
        <div style="color:darkblue;text-align:center;background-color:white; height:3em; padding:1%;"><img style="float:left;height:100%;" src="'.$icone.'" alt="logo"><label style="font-size:1.5em;font-style:bold;">Formulario Site |Data de envio :'.$data.'| WebMestre</label></div>
        <table style="font-size:1.25em">
          <tr>
          <td style="color:red; border-bottom:1px dashed black; font-size:1.25em;">Dados de Contato</td><td></td>
          </tr>
          <tr>
          <td>Nome:</td><td>'.$_POST['nome'].'</td>
          <tr>
          <td>E-mail:</td><td><a href="mailto:'.strtolower($_POST['email']).'?subject=Re:'.$_POST['assunto'].'-Contato Sabrafer&body='.$resp.'">'.strtolower($_POST['email']).'</a></td>
          </tr>
          <tr>
         
          </tr>
        </table>
        <hr style="background-color:darkblue; border:1px solid darkblue; height:0.5em;" />
        <table style="font-size:1.5em;font-style:justify; border-bottom:1px solid black">
          <tr>
          <td style="border-bottom:1px dashed black">Assunto: '.$_POST['assunto'].'</td>
          </tr>
          <tr>
          <td style="border-bottom:1px dashed blue">Mensagem:</td>
          <tr>
          <td>'.nl2br($_POST['mensagem']).'</td>
          </tr>
        </table>
        <span style="font-size:1.1em;color:red;float:right">Esse é um formulario enviado pelo website.<br /> para responder clique no e-mail:<a href="mailto:'.strtolower($_POST['email']).'">'.strtolower($_POST['email']).'</a>.</span>
        </div>

        </body>
        </html>';
       


                // Função HTML :)
                

              $para           = "contato@webmestre.com.br";
              $assunto        = "Contato Site :: ".$_POST['assunto'];
                                

                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html;charset=UTF-8\r\n";
                $headers .= "From: ".$_POST['nome']." <".$_POST['email'].">\r\n";

                // Envia para você
                


                if (mail($para, $assunto, $html, $headers)) {
                  header("Location:".$url."contato.php?enviado");
                  }else{ 
                  header("Location:".$url."contato.php?ermail");
                    
                    };



              } else { 
        header("Location:".$url."contato.php?cap");
        }
    
 
    ?>