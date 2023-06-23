<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/postLogin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <header id="header">
        <h1>Logo</h1>
        <nav>
            <a href="html/historiaMuseu.html">História do Museu</a>
            <a href="./html/creditos.html">Créditos da Equipe</a>
        </nav>
    </header>

    <main>
        <div id="sobre">
            <h1>Sobre o Museu</h1>
            <h3>Cidade de Racatinga</h3>
            <p>O nome do museu será Paulo Agostinho Sobrinho</p>
            <p>Antigo Médico que fez ações importantes para a história da cidade</p>
            
            <div id="image">
                <img id="imagem_Museu" src="https://thumbs.dreamstime.com/b/china-art-museum-interior-exhibitions-shanghai-june-th-people-50633934.jpg">
            </div>
        
        </div>
        <div id="image2">
            <img id="imagem_Museu2" src="https://rare-gallery.com/uploads/posts/585737-architecture.jpg">
            <p>Representação Fiel ao Museu de Racatinga</p>
        </div>

    </main>
    <footer>

        <div>
            <p>Política de privacidade | © 2023. Todos os direitos reservados</p>
        <?php 
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        echo "bem vindo".$_SESSION["nome"]; ?>
        
        </div>
    </footer>
</body>
</html>