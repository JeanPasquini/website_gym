<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local</title>

    <link rel="stylesheet" href="css/style_local.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script src="js/script.js"></script>

</head>

<body>
    <header> 
        <div class="navbar">
            <img src="images/logo.png" alt="logo">
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="index-aluno.php">Aluno</a></li>
                <li><a href="index_local.php">Local</a></li>
                <li><a href="index-loja.php">Loja</a></li>
                <li><a href="index-suporte.php">Suporte</a></li>
            </ul>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="dropdown_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="index-aluno.php">Aluno</a></li>
            <li><a href="index_local.php">Local</a></li>
            <li><a href="index-loja.php">Loja</a></li>
            <li><a href="index-suporte.php">Suporte</a></li>
        </div>
    </header>

    <main>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3694.0366223464202!2d-46.76852444893853!3d-22.20071448530363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c9adc01fde91b5%3A0xfcc5cff79d015e5d!2sR.%20Jos%C3%A9%20Ant%C3%B4nio%20Coimbra%2C%20140%20-%20Jardim%20Varan%2C%20Esp%C3%ADrito%20Santo%20do%20Pinhal%20-%20SP%2C%2013990-000!5e0!3m2!1spt-BR!2sbr!4v1678972786072!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mapa"></iframe>
        </div>

        <div class ="blocomaster">
            <div class="bloco">
                <div class="title">
                    <h1>ENTRE EM CONTATO:</h1>
                </div>
                <div class="content">
                    <div class="local1">
                        <img src="icons/placeholder.png" alt="" class="local1_image">
                        <p>Rua José Antônio Coimbra Nº140 <br>
                        Jardim Varan <br>
                        Espírito Santo do Pinhal | SP</p>
                    </div>
                </div>
                <div class="content">
                    <div class="local2">
                        <img src="icons/o-email.png" alt="" class="local2_image">
                        <p>jonathanpasquini1998@gmail.com</p>
                    </div>
                </div>
                <div class="content">
                    <div class="local3">
                        <img src="icons/smartphone.png" alt="" class="local3_image">
                        <p>+55 (19) 99379-2613</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>

    </footer>

    <script src="js/script-local.js"></script>

</body>
</html>