<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login e Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to left,#6228a5,#ad2ec7,  #83599b);
            text-align: center;
            color: rgb(245, 240, 216);
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.4);
            padding: 40px;
            border-radius: 10px;
        }
        .acessos{
            text-decoration: none;
            color: white;
            border: 3px solid #f703ba;
            border-radius: 10px;
            padding: 10px 15px 10px 15px;
            margin-right: 10px;
        }
        .acessos:hover{
            background-color: #f703ba;
        }
    
    </style>
</head>

<body>
    
    <br><br>
    <h1>Acesso aos sistemas de Login e Cadastramento</h1>
    <p>Projeto elaborado por Alda Monique utilizando PHP, MySQL, HTML, Bootstrap e CSS, realizando testes com XAMPP</p> 
    <div class="box">
        
        <a class="acessos" href="http://localhost/arquivos/formulario/login.php">Login</a>
        <a class="acessos" href="http://localhost/arquivos/formulario/index.php">Cadastre-se</a>
    </div>
</body>

</html>