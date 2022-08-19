<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link href="../css/style.css" rel="stylesheet"> -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/botoes.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
        <title>Site Laravel</title>
        
        <style>  
         
        </style>

        
        <a href="#inicio"><div class="back-to-top" >▲</div></a>         
    
    </head>

    <header class="header" id="inicio">
        <div class="brand-box">
            <div class="IconAjus">
                <img class="tamanhoIcon" src="https://evolvedigital.co.uk/wp-content/uploads/2016/11/Laravel-Logo-White.png" alt="">
                <span class="brand">Site Laravel</span>
            </div>
        </div>

        <div class="menu-box">
            <b><a href="http://localhost:8000/" class="btn2 btn2-white btn2-animated brand-menu">Início</a></b>
            <b><a href="http://localhost:8000/produtos" class="btn2 btn2-white btn2-animated brand-menu">Produtos</a></b>
            <b><a href="http://localhost:8000/login" class="btn2 btn2-white btn2-animated brand-menu">Login</a></b>
        </div>
        
        <div class="text-box">
            <h1 class="titulo-primário">
                <b><span class="titulo-primário-main">Esse é o meu 1º site</span></b>
                <span class="titulo-primário-sub">na plataforma Laravel</span>
            </h1>
            <b><a href="#comeco" class="btn2 btn2-white btn2-animated">COMEÇAR</a></b>
        </div>
    </header> 

    <div id="comeco">
        
        <!-- <div>
            <form class="tamanhoLogin">
                <span class="text-center">login</span>
                    <div class="input-container">
                    <input type="text" required=""/>
                    <label>Usuário</label>		
                </div>
                <div class="input-container">		
                    <input type="password" required=""/>
                    <label>Senha</label>
                </div>
            </form>	
        </div> -->

    </div>
    

    <body style="background-color: #182329;">

        <div class="container2" >
            

            <h1 class="headin5_amrc col_white_amrc pt2"> Pagina Inicial </h1>
            <hr>
            <a style="color: #ffffff;"><b>Meu nome é:</b> {{$usuario}}</a>
            <a style="color: #ffffff;"><b>Perfil:</b> {{$perfil}}</a>
            <a style="color: #ffffff;"><b>Empresa:</b> {{$empresa}}</a>

            
            <a href="http://localhost:8000/produtos"><button class="button" style="vertical-align:middle"><span>Produtos</span></button></a>
           
        </div>

        

    </body>











    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
                <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Ache-nos</h5>

                    <p class="mb10">Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste</p>
                    <p><i class="fa fa-location-arrow"></i> Rua Fulano de Tal </p>
                    <p><i class="fa fa-phone"></i>  +55 (85) 9 9999-0000 </p>
                    <p><i class="fa fa fa-envelope"></i> mpeixoto@resoluteit.com.br  </p>
        </div>


        <div class=" col-sm-4 col-md  col-6 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Links Rápidos</h5>

            <ul class="footer_ul_amrc">
                <li><a href="http://localhost:8000/">Calculadora</a></li>
                <li><a href="http://localhost:8000/">Sobre</a></li>
                <li><a href="http://localhost:8000/">Logo</a></li>
                <li><a href="http://localhost:8000/">Login</a></li>
                <li><a href="http://localhost:8000/">Registrar-se</a></li>
                <li><a href="http://localhost:8000/">Fechar</a></li>
            </ul>
        </div>


        <div class=" col-sm-4 col-md  col-6 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Links Rápidos</h5>
            <ul class="footer_ul_amrc">
                <li><a href="http://localhost:8000/">Calculadora</a></li>
                <li><a href="http://localhost:8000/">Sobre</a></li>
                <li><a href="http://localhost:8000/">Logo</a></li>
                <li><a href="http://localhost:8000/">Login</a></li>
                <li><a href="http://localhost:8000/">Registrar-se</a></li>
                <li><a href="http://localhost:8000/">Fechar</a></li>
            </ul>
        </div>


        <div class=" col-sm-4 col-md  col-12 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Siga-nos</h5>
            <!--headin5_amrc ends here-->

            <ul class="footer_ul2_amrc">
                <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Teste Teste Teste Teste Teste Teste Teste Teste... <a href="#">https://www.teste.com/</a></p></li>
                <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Teste Teste Teste Teste Teste Teste Teste Teste... <a href="#">https://www.teste.com/</a></p></li>
                <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Teste Teste Teste Teste Teste Teste Teste Teste... <a href="#">https://www.teste.com/</a></p></li>
            </ul>
            
        </div>
        </div>
        </div>


        <div class="container">
            <ul class="foote_bottom_ul_amrc">
                <li><a href="http://localhost:8000/">Início</a></li>
                <li><a href="http://localhost:8000/">Sobre</a></li>
                <li><a href="http://localhost:8000/produtos">Produtos</a></li>
                <li><a href="http://localhost:8000/">GitHub</a></li>
                <li><a href="http://localhost:8000/">Linkdin</a></li>
                <li><a href="http://localhost:8000/">Contatos</a></li>
            </ul>

            <p class="text-center">Copyright @2022 | Projetado por <a href="#">SrPeixoto</a></p>

            <ul class="social_footer_ul">
                <li><a href="http://localhost:8000/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="http://localhost:8000/"><i class="fab fa-twitter"></i></a></li>
                <li><a href="http://localhost:8000/"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="http://localhost:8000/"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>

    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>