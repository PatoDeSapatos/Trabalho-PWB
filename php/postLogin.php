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
                <a href="./formComentario.php"><button>Comentar</button></a>
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
            <div id="sobre">
            <?php
                    include "OperWeatherMap.php";
                    //Instancia da API
                    $obOpenWeatherMap = new OpenWeatherMap("0c649db9ad4be68b5dd48264132a4944");
                    
                    //Variaveis
                    $lat = -23.5489;
                    $lon = -46.6388;
                    $cidade = 'São Paulo';
                    $uf = 'SP';
                    $dadosClima = $obOpenWeatherMap->consultarClimaAtual($lat,$lon); 

                    //Cidade
                    echo '<p>Cidade:'.$cidade.'/'.$uf.'</p>';
                    //Temperatura
                    echo '<p>Temperatura: '.($dadosClima['main']['temp'] ?? 'Desconhecido')." °C</p>"; 
                    echo '<p>Sensação Térmica: '.($dadosClima['main']['feels_like'] ?? 'Desconhecido')." °C</p>"; 
                    //Clima
                    echo '<p>Clima: '.($dadosClima['weather'][0]['description'] ?? 'Desconhecido')."</p>"; 
                ?>
                </div>
        </section>
        
    </main>
    <script>
        function mudarComentario(id){
            const value = document.getElementById("idNovoComentario");
            const valueExcluir =  document.getElementById("idExcluirComentario");
            value.value = id;
            valueExcluir.value=id;
            console.log(value.value);
            console.log(valueExcluir.value);
        }
    </script>
    <footer>
        <p>Política de privacidade | © 2023. Todos os direitos reservados</p>
    </footer>
</body>
</html>