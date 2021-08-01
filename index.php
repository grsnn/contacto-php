<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#6A1B9A">

    <title>Contacto | Diseños CS</title>

    <link rel="shortcut icon" href="assets/logo.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
        <h1 class="title">¿ DUDAS O SUGERENCIAS ?</h1>
        <h5 class="subtitle">Elige el medio que mas te convenga</h5>
        <div class="contact">
            <!--ICONS-->
            <div class="icons">
                <a href="https://bit.ly/3dyi0yd" target="_blanck" class="icons__box messenger">
                    <i class="fab fa-facebook-messenger"></i>
                    <span class="text">FB MESSENGER</span>
                </a>
                <a href="https://bit.ly/3dyi0yd" target="_blanck" class="icons__box gmail">
                    <i class="fas fa-envelope"></i>
                    <span class="text">GMAIL</span>
                </a>
                <a href="https://bit.ly/3dyi0yd" target="_blanck" class="icons__box whatsapp">
                    <i class="fab fa-whatsapp"></i>
                    <span class="text">WHATSAPP</span>
                </a>
            </div>
            <!--FORM-->
            <div class="content__form">
                <form method="post" class="form" id="form">
                    <div class="form__group">
                        <label for="name" class="form__group--icon">
                            <i class="fas fa-user"></i>
                        </label>
                        <input type="text" class="form__group--input" name="name" id="name" placeholder="Nombre y Apellidos">
                    </div>
                    <div class="form__group">
                        <label for="email" class="form__group--icon">
                            <i class="fas fa-envelope"></i>
                        </label>
                        <input type="text" class="form__group--input" name="email" id="email" placeholder="Correo">
                    </div>
                    <div class="form__group">
                        <label for="text" class="form__group--icon">
                            <i class="fas fa-pen"></i>
                        </label>
                        <textarea class="form__group--textarea" id="text" name="text" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="form__btn">
                        <button type="submit" class="form__btn--item">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
        <!--FOOTER-->
        <footer class="footer">
            <p class="footer__copy">&copy; 2021 Todos los derechos reservados. <br> Diseño by Gerson Chali</p>
            <div class="footer__redes">
                <a href="https://bit.ly/3xaUtLk" class="footer__redes--item" target="_blanck"><i class="fab fa-github"></i></a>
                <a href="https://bit.ly/3hgQgz6" class="footer__redes--item" target="_blanck"><i class="fab fa-instagram"></i></a>
                <a href="https://paypal.me/dischali" class="footer__redes--item" target="_blanck"><i class="fab fa-paypal"></i></a>
            </div>
        </footer>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="controller_js/mail.js"></script>
</body>

</html>