<?php
    include './loadingPage.php';
    include './conectar.php';
    include './functions.php';
    
    if ( adicionar_a_tabela('teste', $_POST) != false ) {
        session_start();
        foreach ($_POST as $key => $value) { 
            $_SESSION[$key] = $value;
        }
    }

    echo '<meta http-equiv="refresh" content="0; url=../index.php">';
?>