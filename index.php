<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DogSafer - Rastreador GPS para cães</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/chat.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
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
            <a href="login.html" class="btn d-lg-none ml-auto" style="color:#ffffff;"><i class="fas fa-user"></i></a>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a href="index.html" class="nav-link"><i class="fas fa-home"></i>Home</a></li>
                    <li class="nav-item"><a href="institucional.html" class="nav-link">Institucional</a></li>
                    <li class="nav-item"><a href="produto.html" class="nav-link">Produto</a></li>
                </ul>
                <a href="cart.php" class="btn ml-auto" style="color:#ffffff;"><i class="fas fa-shopping-cart"></i></a>
                <a href="login.html" class="btn d-none d-sm-none d-md-none d-lg-block" style="border-radius:40px;border:1px solid #00DBB4;color:#ffffff;"><i class="fas fa-user mr-2"></i>Área do cliente</a></a>
            </div>
        </div>
    </nav>
    <header>
        <section id="hero">
            <div class="container hero-container mt-lg-5">
                <h1 class="mt-lg-5">Não perca mais o seu cão</h1>
                <h4 class="mt-lg-5 text-white">Com a coleira da DogSafer isso é possível</h4>
                <a id="button1" class="btn btn-primary my-4" href="#">Saiba Mais</a>
            </div>
        </section>
    </header>
    <section class="content1">
        <div class="container my-5">
            <div class="row ">
                <div class="col-md-4 text-center">
                    <img id="coleira" src="img/coleira.jpg" class="img-rounded" alt="Coleira">
                </div>
                <div class="col-md-8">
                    <h2>Ache o seu cão em qualquer lugar</h2>
                    <p>Com a plataforma online da DogSafer você poderá rastrear o seu animal de estimação que estiver com a coleira em qualquer lugar. A coleira transmite seu sinal via satélite permitindo maior precisão na localização</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 my-5">
                    <h2>Chega de preocupação</h2>
                    <p>A coleira rastreadora também permite que você emita um alarme sonoro para que seu cachorro possa entender que você o está procurando também.Saberá a sua localização GPS e pode agir rapidamente.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img id="iphone" src="img/iphone.png" class="img-rounded" alt="Coleira">
                </div>
            </div>
        </div>
        <div class="container" align="center">
            <a id="button2" class="btn btn-primary my-4" href="#">Ver preço</a>
        </div>
    </section>

    <section class="content2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <h1 style="text-align:center;">Faça parte dessa família para o bem dos animais</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content_3">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-8">
                    <h3><i style="color:rgb(255,0,0);" class="fas fa-map-marker-alt mt-5"></i> Localização Via Satélite</i></h3>
                    <p>Ache o seu cão a qualquer distância que ele esteja de você</p>
                    <h3><i style="color:rgb(255,0,0);" class="fas fa-search-minus mt-5"></i> Compacto</i></h3>
                    <p>Além de ser pequeno é leve e não vai atrapalhar o movimento do seu animal</p>
                    <h3><i style="color:rgb(255,0,0);" class="fas fa-music mt-5"></i> Alarme Sonoro</i></h3>
                    <p>Você também pode treinar seu animal para retornar quando ele escutar o alarme</p>
                </div>
                <div class="col-md-4">
                    <img id="iphonemaps" src="img/iphonemaps.png" class="img-rounded" alt="localização">
                </div>
            </div>
        </div>
    </section>

    <!-- Chat-->
     <div class="wrapper">
        <div class="chat-box">
            <div class="chat-head">
                <h2>Atendimento</h2>
                <button id="setaChat"><div class="container" id="setaChat" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar3"></div>
</div></button>
            </div>
            <div class="chat-body">
                <div class="msg-insert" id="mensagens">
                  <!--<div class="msg-send"> Send message </div>
                  <div class="msg-receive"> Received message </div>
                    -->
                </div>
                <div class="chat-text">
                    <textarea placeholder="Mensagem" id="inputMensagem"></textarea>
                    <button type="button" id = "enviar" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane fa-2x"></i></button>            
                </div>
            </div>
        </div>
    </div>


    <section class="content_2">
        <div id="fugitivos" class="container-fluid">
            <h1>Muitos cachorros fogem diariamente</h1>
            <p>Porém nem todos conseguem voltar para sua casa e família</p>
        </div>
    </section>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 250);
        });
    </script>
           
    <script>
    function myFunction(x) {
  x.classList.toggle("change");
}


    $(document).ready(function(){
    $("#setaChat").click(function(){
    $(".chat-body").slideToggle("fast");
    $(".chat-text").slideToggle("fast");
  });
});

    

    $('#conversa').show();
    var enviar = $('#enviar');
    var mensagens = $('#mensagens');

    enviar.click(function(){
        enviarMensagem();
    });

    $('#inputMensagem').keyup(function(event) {
    if(event.keyCode == 13){
        enviarMensagem();
        $('#inputMensagem').val("");
        }

    });


    function enviarMensagem()
    {
        
        var inputMensagem = $('#inputMensagem').val().replace("\n", "");
            inputMensagem = inputMensagem.trim();
                
        if (inputMensagem !="") {
        mensagens.append("<div class='msg-send'>"+inputMensagem+"</div>");
        
        chatbot(inputMensagem);

        $('#inputMensagem').val("");

    }
}
    

    function chatbot(message){
      $.ajax({
        url: 'dialog.php?m='+message,
        type: 'post',
        dataType: 'text',   
        timeout:1000,       
        success: function(response)
        {
          if(response.error)
          {
           $('#mensagens').append('Falha na comunicação.');
          }
          else
          {       
            mensagens.append("<div class='msg-receive'>"+response+"</div>");
          }
          $(".chat-body").scrollTop($(".chat-body")[0].scrollHeight);
        },
        error: function (error)
        {
            $('#mensagens').append('Falha na comunicação.');
        }   
      });
    }
    //funções chat
    $(function(){
    var arrow = $('.chat-head img');    

    arrow.on('click', function(){
        var src = arrow.attr('src');

        $('.chat-body').slideToggle('fast');
        if(src == 'img/seta2.png'){
            arrow.attr('src', 'img/seta.png');
        }
        else{
            arrow.attr('src', 'img/seta2.png');
        }
    });


    arrow.click();
});
    </script>

</body>

</html>
