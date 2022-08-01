<?php
    if(isset($_POST['submit'])){
      
        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone =$_POST['tel'];
        $genero =$_POST['genero'];
        $data_nascimento =$_POST['data_nascimento'];
        $cidade =$_POST['cidade'];
        $estado =$_POST['estado'];
        $endereco =$_POST['endereco'];

        $result = mysqli_query($mysql, "INSERT INTO usuarios(nome, senha, email, telefone, genero, data_nasc,cidade,estado,endereco) 
        VALUES ('$nome', '$senha', '$email','$telefone', '$genero', '$data_nascimento', '$cidade', '$estado', '$endereco' )");
        
        header('location: login.php');
        
    }
?>
 
<!DOCTYPE html>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário de Cadastro</title>
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
           
            .box{
                color: white;
                position: absolute;
                top: 50%;
                left:50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, 0.6 );
                padding: 15px;
                border-radius: 15px;
                width:20%;
            }
            fieldset{
                border: 3px solid #f703ba;
            }
            legend{
                border: 1px solid #f703ba;
                padding: 10px;
                text-align: center;
                background-color:#f703ba;
                border-radius: 5px;
                margin-bottom: 15px;;
            
            }
            .inputBox{
                position: relative;
            }
            .inputUser{
                background: none;
                border:none;
                border-bottom: 1px solid white;
                outline: none;
                color:white;
                font-size: 15px;
                width: 100%;
                letter-spacing: 2px;
                
            }
            .labelInput{
                position: absolute;
                top:0px;
                left:0px;
                pointer-events:none;
                transition: .5s;
                
            }
            .inputUser:focus ~ .labelInput, 
            .inputUser:valid ~ .labelInput
            {
                top: -20px;
                font-size: 12px;
                color:#f703ba; 
            } 
            
            #data_nascimento{
                border: none;
                padding: 8px;
                border-radius: 6px;
                outline: none;
                font-size: 15px;
                text-align: center;
            }
            #submit{
                background-image: linear-gradient(to left, #7e1255,  #fc04a9);
                width: 100%;
                border:none;
                padding: 15px;
                color: white;
                cursor: pointer;
                border-radius: 6px;
                font-size: 15px;
            }
            #submit:hover{
                background-image: linear-gradient(to right, #570c3a,  #b300c4);
            }
            footer {
                position: absolute;
                bottom: 5px;
                background-image: none;
                color: rgb(207, 207, 207);
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
        <div class="box">
            <form action="index.php" method="POST">
                <fieldset>
                    <legend><b>Formulário de Clientes</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for = "nome" class="labelInput">Nome Completo</label>
                    </div>
                    <br><br>  
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for = "senha" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="tel" name="tel" id="tel" class="inputUser" required>
                        <label for = "tel" class="labelInput">Telefone</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for = "email" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    <p>Gênero</p>
                    <input type="radio" name="genero" value="feminino" required>
                    <label for ="feminino">Feminino</label>
                    <input type="radio" name="genero" value="masculino" required>
                    <label for ="masculino">Masculino</label>
                    <input type="radio" name="genero" value="outro" required>
                    <label for ="outro">Outro</label>
                    <br><br>
                    <div class="inputBox">
                        <label for = "data_nascimento" ><b></b>Data de Nascimento:</b></label>
                        <input type="date" name="data_nascimento" id="data_nascimento" required>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for = "cidade" class="labelInput"><b></b>Cidade</b></label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for = "estado" class="labelInput"><b></b>Estado</b></label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for = "endereco" class="labelInput"><b></b>Endereço</b></label>
                    </div>
                    <br><br>
                    <input type ="submit" name="submit" id="submit">
                </fieldset>
            </form>
        </div>
    </body>
    <footer>
       
        <a href="teste.com"><img class="img-footer" src="gmail-icon.png" title="aldagalcantara@gmail.com"></a>
        <a href="https://github.com/aldamonique"><img id="git" class="img-footer" src="github-icon.png" title="Acesse aqui o meu GitHub"></a>
        <a href="linkedin.com"><img class="img-footer" src="linkedin-icon.png" title="Acesse aqui o meu LinkedIn" id="linkedin"></a> 
        <p>By Alda Monique Gonçalves de Alcantara.</p>
    </footer>

</html>