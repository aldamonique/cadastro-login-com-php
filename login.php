<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                background-image: linear-gradient(to left,#6228a5,#ad2ec7,  #83599b);
            }
            .home{
                background-color: #f703ba;
                padding: 10px;
                border-radius: 5px;
                text-decoration: none;
                color: white;
                position: absolute;
                right: 40px;
                font-weight: bold;
            }
            .tela-login{
                background-color: rgba(0,0,0, 0.3);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 80px;
                padding-right: 100px;
                padding-top: 20px;
                border-radius: 12px;
                color: white;
                border: 3px solid white;
                padding-bottom: 20px;
                
            }
   
            .titulo{
                text-align: center;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                padding: 0;
                font-size: 50px;
            }

            input{
                padding: 10px;
                border: none;
                outline: none;
                background-color: rgb(196, 187, 193);
                padding-right: 10px;
                margin-right: 20px;
                margin-bottom: 30px;
                border-radius: 2px;
            }
            .div-botao{
                text-align: center;
                
            }
            .input-submit{
                background-color: #ffffff;
                font-weight: 600;
                border: none;
                padding: 10px 30px 10px 30px;
                width: 60%;
                border-radius: 2px;
            }
            .input-submit:hover{
                background-color: #be53df;
                cursor: pointer;
                transition: 0.5s;
                color: white;
            }
           
            footer {
                position: absolute;
                bottom: 5px;
                background-image: none;
                color: rgb(207, 207, 207);
                font-weight: bold;
                width: 100%;
                height: -5px;    
                text-align: center;
                line-height: 20px;
                left: 0px;
                font-weight: 400;
            }
            
            .img-footer{
                width: 30px;
                
                top: -20px;
                left: 9%;
            }
            #linkedin{
                background-color: white;
                border-radius: 3px;
            }
            footer p{
                text-align: center;
            }

        </style>
    </head>
    <body>
        <br><br>
    <a class="home" href="home.php">Home</a>
        <div class="tela-login"> 
            <h1 class="titulo">LOGIN</h1>
            <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="senha" placeholder="Senha">
            <br>
            <div class="div-botao"><input type="submit" name="submit" value="Enviar" class="input-submit"></div>
        </div>
    </body>
    <footer>
       
        <a href="teste.com"><img class="img-footer" src="gmail-icon.png" title="aldagalcantara@gmail.com"></a>
        <a href="https://github.com/aldamonique"><img id="git" class="img-footer" src="github-icon.png" title="Acesse aqui o meu GitHub"></a>
        <a href="linkedin.com"><img class="img-footer" src="linkedin-icon.png" title="Acesse aqui o meu LinkedIn" id="linkedin"></a> 
        <p>By Alda Monique Gonçalves de Alcantara.</p>
    </footer>
</html>