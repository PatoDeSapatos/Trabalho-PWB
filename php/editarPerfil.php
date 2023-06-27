<?php 
    include './conectar.php';
    include './loadingPage.php';
    session_start();

    $sql = 'UPDATE `usuario` SET ';

    $valores = '';
    foreach ($_POST as $key => $value) {
       if ($value != '') $valores .= $key." = '".$value."', ";
    }

    $sql .= $valores;
    $sql = rtrim($sql, ', ');
    $sql .= " WHERE nick = "."'".$_SESSION['nick']."'";

    echo $sql;
    $editar = mysqli_query($conexao, $sql);

    echo "<meta HTTP-EQUIV='refresh' CONTENT='2; URL=./perfil.php'>";
?>