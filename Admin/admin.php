<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DogSafer - Rastreador GPS para cães</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/usuario.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style type="text/css">
        .scrolled {
            transition: 500ms ease;
            background-color: #282828 !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <button type="button" class="navbar-toggler mr-auto" data-toggle="collapse" data-target="#menu"><span class="navbar-toggler-icon"></span></button>
        <a class="navbar-brand" href="#">
            <img src="img/logodogsafer6.png" alt="logodogsaferweb" height="40px">
        </a>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a href="#" class="nav-link"><i class="fas fa-home"></i>Incluir Número</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Alterar</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Ver clientes</a></li>
                </ul>
                <?php if(isset($_SESSION['login'])){ ?>
                <a href="logout.php" class="btn ml-auto" style="color:#ffffff;">Sair</i></a>
                <?php } ?>
                <a href="#" class="btn d-none d-sm-none d-md-none d-lg-block"><i class="fas fa-user mr-2"><?php echo $_SESSION['usuario']; ?></i></a></a>
            </div>
        </div>
    </nav>

    <section class="footer">
        <!-- Footer -->
        <footer id="footer" class="page-footer font-small">
            <!-- Footer Elements -->
            <div class="container">
                <!-- Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-12 py-5">
                        <div class="mb-5 flex-center">
                            <!-- Facebook -->
                            <a class="icon">
                                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="icon">
                                <i class="fab fa-twitter white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="icon">
                                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Linkedin-->
                            <a class="icon">
                                <i class="fab fa-linkedin-in fa-lg white-text fa-2x"> </i>
                            </a>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row-->
            </div>
            <!-- Footer Elements -->
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright. Todos os direitos reservados a DogSafer
            </div>
            <!-- Copyright -->
        </footer>
    </section>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>