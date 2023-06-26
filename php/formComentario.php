<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/formComentario.css">
    </head>
    <body>
        <header>
            <figure><img src="../images/logo_paulo_agostinho.png" class="logo"/></figure>
        <nav>
            <a href="postLogin.php">Voltar</a>
        </nav>
        </header>

        <main>
            <div id="wrapper">
            <form method="post">
                <h2>Comentar</h2>
                <textarea name="comentario"></textarea>
            
            
            <button type="submit" name="submeter" class="btn">Comentar</button>   
            </form>
            </div>
        </main>
        <footer>

        <img src="../images/logo_ifsp.png" alt="logo ifsp">

        <p>Política de privacidade | © 2023. Todos os direitos reservados.</p>
        
        <div>
            <p>Navegue: </p>
            <a href="../html/creditos.html">Equipe de Desenvolvimento</a>
            <a href="../html/historiaMuseu.html">História do Museu</a>
            <?php 
                if( isset( $_SESSION['logado'] ) ) {
                    echo'<a href="../php/postLogin.php">Pós Login</a>';
                }
             ?>
        </div>

    </footer>
    </body>
</html>
<?php
    if(isset($_POST['submeter'])){
        include "./conectar.php";
        
        $comentario = $_POST['comentario'];
        $nomeUsuario = $_SESSION['nome'];
        $idUser = mysqli_fetch_array(mysqli_query($conexao,"select id from usuario where nome='$nomeUsuario'"));
        $inserir = mysqli_query($conexao,"insert into `comentario`(`idUser`, `comentario`) 
        VALUES ($idUser[0],'$comentario')");
    }
?>
