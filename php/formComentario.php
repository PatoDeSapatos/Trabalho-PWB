<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="post">
        <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <label>Comentário:</label>
                    <p><textarea name="comentario"></textarea></p>
                </div>
                <button type="submit" class="btn">Comentar</button>    
        </form>
    </body>
</html>
<?php
    if(isset($_POST['comentario'])){
        include "./conectar.php";
        
        $comentario = $_POST['comentario'];
        $nomeUsuario = $_SESSION['nome'];
        $idUser = mysqli_query($conexao,"select id from usuario where nome='$nomeUsuario'");
        $inserir = mysqli_query($conexao,"insert into `comentario`(`idUser`, `comentario`) 
        VALUES ($idUser,'$comentario')");
    }
?>