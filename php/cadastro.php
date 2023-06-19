<?php
    include './loadingPage.php';
    include './conectar.php';
    include './functions.php';
    
    session_start();
    if ( adicionar_a_tabela( $conexao, 'teste', $_POST ) != false ) {
        foreach ($_POST as $key => $value) { 
            $_SESSION[$key] = $value;
        }
    }

    echo '<meta http-equiv="refresh" content="3; url=../index.php">';
?>