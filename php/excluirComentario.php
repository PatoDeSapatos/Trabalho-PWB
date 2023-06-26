<?php
    session_start();
    include "./conectar.php";
    if(isset($_POST['confirmar'])){
        $id = $_POST['idExcluirComentario'];
        $query = mysqli_query($conexao,"delete from `comentario` where id=$id");
    }
?>