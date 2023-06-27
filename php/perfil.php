<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/perfil.css">
    <title><?php echo $_SESSION['nome']; ?></title>
</head>
<body>
    <header>
        <figure>
            <img src="../images/logo_paulo_agostinho.png" class="logo"/>
        </figure>

        <nav>
            <a href="../index.php">Voltar ao Início</a>
        </nav>
    </header>

    <main>
        <form action="./editarConta.php" id="form-editar-senha">
            <label for="senha">Nova senha</label>
            <input type="password" name="senha">
            
            <label for="senha">Confirmar nova senha</label>
            <input type="password" name="senhaConfirmar">

            <button>Enviar</button>
        </form>
        <section>
            <form action="./editarPerfil.php" method="post" id="editar-perfil">
                <h1>Informações da Conta</h1>

                <?php
                    if ( isset($_SESSION['foto'] ) ) {
                            echo '<img id="editar-foto" src="../images/fotos_perfil/', $_SESSION['foto'] ,'" alt="foto-de-perfil">';
                    }
                ?>
                <label id="btn-editar-foto">Mudar Foto</label>
                <select name="foto">
                    <option value="">Editar</option>  
                    <option value="cachorro.png">Cachorro</option>
                    <option value="elefante.png">Elefante</option>
                    <option value="gato.png">Gato</option>
                    <option value="guaxinim.png">Guaxinim</option>
                    <option value="leao.png">Leão</option>
                    <option value="lontra.png">Lontra</option>
                </select>

                <div class="input-box">
                    <div id="nome" class="input"><?php echo $_SESSION['nome'] ?> <img src="../images/edit_icon.png"></div>
                    <div id="nick" class="input"><?php echo $_SESSION['nick'] ?> <img src="../images/edit_icon.png"></div>
                    <div id="email" class="input"><?php echo $_SESSION['email'] ?> <img src="../images/edit_icon.png"></div>
                </div>

                <div class="input-box">
                    <div id="cidade" class="input"><?php echo $_SESSION['cidade'] ?> <img src="../images/edit_icon.png"></div>
                    <div id="telefone" class="input"><?php echo $_SESSION['telefone'] ?> <img src="../images/edit_icon.png"></div>
                </div>

                <button type="submit">Editar</button>
            </form>
        </section>

        <section class="senha-sair">
            <button id="btn-mudar-senha" class="btn-popup">Mudar Senha</button>
            <a href="./sairConta.php"><button id="btn-sair" class="btn-popup">Sair da conta</button></a>
        </section>
    </main>

    <footer>
        <img src="../images/logo_ifsp.png" alt="logo ifsp">
        <p>Política de privacidade | © 2023. Todos os direitos reservados.</p>
    </footer>

    <script src="../js/perfil.js"></script>
</body>
</html>