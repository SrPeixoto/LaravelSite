<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet">
        <title>Document</title>
        <style>         
        </style>

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/botoes.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    </head>


    <body style="background-color: #060606;">
        <div class="container2">
            <h1>PAGINA DE PRODUTOS</h1>

            <hr>
            <form method="post">    
                @csrf
                <b>Produto</b>
                <input type="text" name="Produto"><br><br>

                <b>Preço</b>
                <input type="text" name="Preço"><br><br>

                <b>Categoria</b>
                <input type="text" name="Categoria"><br><br>

                <!-- <input type="submit" value="Salvar"> -->
                <a><button class="button" style="background-color: #76E5FD; vertical-align:middle"><span>Salvar</span></button></a>
            </form>
            
            <hr>

            <a href="http://localhost:8000"><button class="btn third" style="vertical-align:middle"><span>Voltar</span></button></a>
            

            <br>
            
            <label>Produto: {{$Produto}}</label><br>
            <label>Preço: {{$Preço}}</label><br>
            <label>Categoria: {{$Categoria}}</label><br>

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
                <li><a href="http://localhost:8000/">Produtos</a></li>
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