<?php 
    session_start();
    if(isset($_SESSION['login'])) {
        if($_SESSION['usuario'] != true){
            header('location:../login.php');
        }
    }
    else{
         header('location:../login.php');
    }
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
    <link href="./css/admin.css" rel="stylesheet">
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
                    <li class="nav-item"><a href="clientes.php" class="nav-link">Ver clientes</a></li>
                </ul>
                <?php if(isset($_SESSION['login'])){ ?>
                <a href="logout.php" class="btn ml-auto" style="color:#ffffff;">Sair</i></a>
                <?php } ?>
                <a href="#" class="btn d-none d-sm-none d-md-none d-lg-block"><i class="fas fa-user mr-2"><?php echo $_SESSION['usuario']; ?></i></a></a>
            </div>
        </div>
    </nav>

    <div class="container">
        <form method="post" id="formadmin" action="../classes/incluirnum.php">
            <div class="form-row">
                <div class="form-group col-sm-4">
                    <label for="idAnimal">Id do animal</label>
                    <input type="text" name="idanimal" id="idAnimal" placeholder="Id do animal" class="form-control" title="Digite apenas números">
                </div>
                <div class="form-group col-sm-8">
                    <label for="numColeira">Número para rastreio da coleira</label>
                    <input type="text" name="numColeira" id="numColeira" placeholder="Número da coleira" class="form-control" title="Digite um número de celular">
                </div>
                <button type = "submit" class="btn btn-lg btn-block btn-success text-uppercase">Incluir</button>
            </div>
        </form>
    </div>

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
    <script src="js/jquery.mask.min.js"></script>
    <script>
      $("#numColeira").mask("(00) 00000-0009");
    </script>
</body>

</html>