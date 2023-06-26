<?php
    include './loadingPage.php';
    include './conectar.php';

    session_start();
    if(isset($_POST['user'])&& isset($_POST['pass'])){
        $user = $_POST['user'];
        $pass =$_POST['pass'];
        $login =mysqli_query($conexao,"select * from usuario where nome='$user' && senha ='$pass'");
        if(mysqli_num_rows($login)==0){
            echo "<script language='JavaScript' charset='utf-8'>alert('Login Inválido!')</script>";
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0; URL=../index.php'>";
        }
        else{
            $vetor=mysqli_fetch_array($login);
            $_SESSION["nome"] = $user;
            $_SESSION["id"] = $vetor[0];
            $_SESSION["data"] = $vetor["datac"];
            $_SESSION["foto"] = $vetor["foto"];
            $_SESSION["logado"] = true;
            header ("Location: ./postLogin.php");
        }
    }
?>