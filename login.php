<?php 
   session_start();

   if(isset($_SESSION['login'])){
       header('location:../User/usuario.php');
   }
?>

<!DOCTYPE html>
<html lang ="pt">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Login DogSafer</title>
      <link rel="shortcut icon" href="img/favicon.ico" />
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="fontawesome/css/all.css" rel="stylesheet">
      <link href="css/login.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
   </head>
   <body>
      <div class="container" align="left">
         <a class="btn btn-outline-light" id="voltar" href="index.php">
         Voltar
         </a>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
               <div class="card card-signin my-5">
                  <div class="card-body">
                     <a href="#">
                       <img class="text-center my-4 img-fluid" src="img/logodogsafer66.png" alt="logodogsaferweb" height="90px" width="auto">
                     </a>
                     <h5 class="card-title text-center my-1 mb-3">Login</h5>
                     <?php if(isset($_GET['erro'])){ ?>
                        <div class="alert alert-danger" role="alert">
                           Email e/ou senha incorreto(s)
                        </div>
                    <?php } ?>
                     <form class="form-signin" action="./classes/login.php" method="post">
                        <div class="form-label-group">
                           <label for="inputEmail">Email</label>
                           <input type="email" id="txtemail" name="txtemail" class="form-control" placeholder="Digite o email..." required autofocus>
                        </div>
                        <div class="form-label-group my-3 mb-4">
                           <label for="inputPassword">Senha</label>
                           <input type="password" id="txtsenha" name="txtsenha" class="form-control" placeholder="Digite a senha..." required>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase mb-3" id="button2" type="submit">Login</button>
                        <p> Não consegue acessar sua conta?<a style="color:#0074E2;" href="#"> Clique aqui</a></p>
                        <hr class="my-4">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>