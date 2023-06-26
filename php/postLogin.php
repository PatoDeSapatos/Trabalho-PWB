<?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    session_start();
    include "conectar.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../css/postLogin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <header id="header">
        <figure>
            <img src="../images/logo_paulo_agostinho.png" class="logo"/>
        </figure>

        <nav>
            <a href="../php/formComentario.php">Comentários</a>
            <a href="../index.php">Voltar ao início</a>
        </nav>
    </header>

    <main>
        <section id="usuario">
            <img src="../images/fotos_perfil/<?php echo "$_SESSION[foto]";?>" alt="foto-de-perfil">
            <h1>Bem Vindo <?php echo $_SESSION["nome"]?>!</h1>
            <h2>Você é membro desde: <?php echo $_SESSION["data"];?></h2>
       
            <div>
                <a href="./perfil.php"><button>Olhar Seu Perfil</button></a>
                <a href="./formComentario.php"><button>Olhar Comentários</button></a>
            </div>

            <div class="background"></div>    
        </section>

        <section id="sobre-museu">
            <div id="sobre">
                <h2>Sobre o Museu</h2>
                <h3>Cidade de Racatinga</h3>
                <p>O nome do museu será Paulo Agostinho Sobrinho</p>
                <p>Antigo Médico que fez ações importantes para a história da cidade</p>
                <img id="imagem_Museu" src="https://thumbs.dreamstime.com/b/china-art-museum-interior-exhibitions-shanghai-june-th-people-50633934.jpg">
            </div>
            <div id="image2">
                <img id="imagem_Museu2" src="https://rare-gallery.com/uploads/posts/585737-architecture.jpg">
                <p>Representação Fiel ao Museu de Racatinga</p>
            </div>
        </section>
        <section>
            <?php
                $buscar = mysqli_query($conexao,"select c.id,u.nome, c.comentario FROM comentario c
                                                INNER JOIN usuario u ON c.idUser = u.id ORDER BY c.idUser;");
                echo "<form id='formAtualizar' method='POST'>";                
                while($vetor=mysqli_fetch_array($buscar)){
                    
                    echo "<span id='nome'>$vetor[1]</span> : <span id='comentario'>$vetor[2]</span>";
                    if($_SESSION["nome"]==$vetor[1]){
                        echo "<button onclick='mudarComentario()' id='$vetor[0]' name='$vetor[0]'>Editar</button><p></p>";
                    }
                    else echo "<br>";
                }
                echo "</form>";
            ?>
        </section>
    </main>
    <script src="../js/postLogin.js"></script>
    <footer>
        <p>Política de privacidade | © 2023. Todos os direitos reservados</p>
    </footer>
</body>
</html>