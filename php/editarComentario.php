<?php
session_start();

    include "./conectar.php";
    if(isset($_POST['submit'])){
        $id = $_POST['idNovoComentario'];
        $comentario = $_POST['novoComentario'];
        $query =  mysqli_query($conexao,"update `comentario` set `comentario`='$comentario' where id = $id");
    }

?>

