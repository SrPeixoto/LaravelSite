<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Painel</title>

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/botoes.css">
    
        <script>
            function validateForm() {
            var user = document.forms["lForm"]["lUsuario"].value;
            var pass = document.forms["lForm"]["lUsuario"].value;
            
            if (user == "" || user == null) {
                alert("Usuário está vazio!");
                return false;

            } else if (pass == "" || pass == null) {
                alert("Senha está vazia!");
                return false;
            } else {
                alert("Passou!");
            }
        }
        </script>
    </head>
    <body style="background-color: #182329;">
        <div id="comeco">   
            <div>
                <form  method="post" name="lForm" class="tamanhoLogin">
                    @csrf
                    <span class="text-center">login</span>
                        <div class="input-container">
                        <input name="lUsuario" id="lUsuario" type="text" required=""/>
                        <label>Usuário</label>		
                    </div>
                    <div class="input-container">		
                        <input name="lSenha" id="lSenha" type="password" required=""/>
                        <label>Senha</label>
                    </div>
                    <div class="menu-box" style="top: 380px;
                                                left: 910px;">
                        <a><button class="btn third" style=""><span>Login</span></button></a>
           

                    </div>  
                </form>	

                <label>Usuário: {{$Usuario}}</label><br>
                <label>Senha: {{$Senha}}</label><br>

            </div>

        </div>
    </body>
</html>