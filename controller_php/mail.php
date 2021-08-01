<?php 
    //clean
    function cleanDatas($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST)){
        $name = cleanDatas($_POST['name']);
        $emailUser = $_POST['email'];
        $text = cleanDatas($_POST['text']);
        $subjet = 'Mensaje de Contácto';
        $emailAdmin = 'tu correo, donde llegaran los mensajes de contacto';
        
        $error = '';

        if(empty($name) || empty($emailUser) || empty($text)){
            $error = 'Por favor complete todos los campos';
        }
        if(!empty($emailUser)){
            $emailUser = filter_var($emailUser, FILTER_VALIDATE_EMAIL);
            if(!filter_var($emailUser, FILTER_VALIDATE_EMAIL)){
                $error = 'Por favor ingrese un Email valido.';
            }
        }  
        
        $msg ="
        
        <!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Diseños CS</title>
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Lobster&display=swap' rel='stylesheet'>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: #212121;
            font-family: 'Roboto', sans-serif;
        }
        
        .container {
            width: 95%;
            max-width: 1000px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0px 2px 20px rgb(0, 0, 0, .15);
            overflow: hidden;
        }
        
        .header {
            padding: 20px;
            background-color: rgba(255, 255, 255, .9);
        }
        
        .header__title {
            font-size: 20px;
            color: rgba(0, 0, 0, .67);
        }
        
        .header__title .span {
            color: rgba(0, 0, 0, .87);
            border: dashed 1px rgba(0, 0, 0, .2);
            padding: 5px;
            border-radius: 5px;
            font-size: 18px;
        }
        
        .banner {
            background-image: linear-gradient( 109.6deg, rgba(48, 207, 208, 1) 11.2%, rgba(51, 8, 103, 1) 92.5%);
            width: 100%;
            height: 100px;
        }
    
        .banner__text .img {
            width: 30px;
            margin-right: 5px;
        }
        
        .message {
            padding: 20px;
            background-color: rgba(255, 255, 255, .9);
        }
        
        .message__text {
            color: rgba(0, 0, 0, .87);
            font-size: 18px;
        }
        
        .footer {
            padding: 20px;
            text-align: center;
            background-color: rgba(255, 255, 255, .7);
        }
        
        .footer__text {
            color: rgba(0, 0, 0, .87);
        }
        
        .footer__text .link {
            text-decoration: none;
            font-weight: 700;
            color: rgba(0, 0, 0, .87);
            border: dashed 1px rgba(0, 0, 0, .2);
            padding: 5px;
            border-radius: 5px;
        }
    </style>

</head>

<body>
    <div class='container'>
        <header class='header'>
            <h1 class='header__title'>Mensaje de <span class='span'>$name</span></h1>
        </header>
        <div class='banner'></div>
        <div class='message'>
            <p class='message__text'>$text</p>
        </div>
        <footer class='footer'>
            <p class='footer__text'>Responder mensaje a
                <br><br><span class='link'>$emailUser</span>
            </p>
        </footer>
    </div>
</body>

</html>"
;

        if(!$error){
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
            $headers .= "From: <$emailUser>" . "\r\n";
            $headers .= "Cc: $emailAdmin" . "\r\n";

            // esta funcion ejecuta el correo PHP
            $sendMail = mail($emailAdmin, $subjet, $msg, $headers);
            if( $sendMail ) {
                echo 'ok';
              } else {
                  echo "Hubo un problema al enviar su mensaje. Intentélo mas terde.";
              } 
        }else{
            echo $error;
        }
    }
?>