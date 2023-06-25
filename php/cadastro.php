<?php
    include './loadingPage.php';
    include './conectar.php';
    include './functions.php';

    $lembrar = $_POST['lembrar'];
    $nickExiste = mysqli_fetch_array( mysqli_query($conexao, "select nick from usuario where nome='$_POST[nick]'") );
    $emailExiste = mysqli_fetch_array( mysqli_query($conexao,"select email from usuario where nome='$_POST[email]'") );

    $dadosExistentes = ($nickExiste > 0) || ($emailExiste > 0);

    if ( !$dadosExistentes ){
        session_start();

        unset( $_POST['lembrar'] );
        $dadosUsuario = $_POST;
        $dadosUsuario['data'] = date("Y-m-d");

        if ( adicionar_a_tabela( $conexao, 'usuario', $dadosUsuario ) != false ) {
            foreach ($dadosUsuario as $key => $value) { 
                $_SESSION[$key] = $value;
            }

            $_SESSION['logado'] = true;
            unset($_SESSION['senha']);

            echo "<meta HTTP-EQUIV='refresh' CONTENT='1; URL=./postLogin.php'>";
        } else {
            echo "<script language='JavaScript' charset='utf-8'>alert('Registro Inválido!')</script>";
        }
    } else {
        echo "<script language='JavaScript' charset='utf-8'>alert('Dados já existem!')</script>";
    }

    echo "<meta HTTP-EQUIV='refresh' CONTENT='2; URL=../index.php'>";
?>