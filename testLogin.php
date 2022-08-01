<?php
    session_start();
    //print_r($_REQUEST); // necessário para verificar a funcionalidade do submit, antes de definir a estrtura de validação

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) )
    {
        //Acessa sistema
        include_once('config.php');
        $email=$_POST['email'];
        $senha=$_POST['senha'];

        $sql = "SELECT * FROM usuarios where email = '$email' and senha = '$senha'";
        $result = $mysql->query($sql);

        print_r($result);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('location: login.php');
        }
        else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
       
    }else{
        //Não acessa o sistema e retorna a página de Login
        header('Location: login.php');
    }

?>
