<?php    
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/inicial.css">
    <title>Museu</title>
</head>
<body>
    <header id="indexHeader">
        <figure>
            <img src="./images/logo_paulo_agostinho.png" class="logo"/>
        </figure>

        <nav>

            <?php 
                if ( isset( $_SESSION['logado'] ) ) {
                    echo "
                        <a href='./php/perfil.php'> <span>
                            $_SESSION[nome]
                            <img src='./images/fotos_perfil/$_SESSION[foto]' class='foto-perfil'>
                        </span> </a>
                    ";
                } else {
                    echo'<button class="btnLogin">Login</button>';
                }
            ?>
        </nav>
    </header>

    <main>
        <div id="wrapper">
            <span id="icon-close">
                <ion-icon name="close"></ion-icon>
            </span>

            <div class="form-box login">
                <h2>Login</h2>
                <form method="post" action="php/login.php">
                    <div style="width:100%;">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="person"></ion-icon></span>
                            <input name="user" type="text" required>
                            <label>Nome</label>
                        </div>

                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input name="pass" type="password" required>
                            <label>Senha</label>
                        </div>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Lembre de Mim</label>
                        <a href="#">Esqueceu a senha?</a>
                    </div>
                    
                    <button type="submit" class="btn">Login</button>

                    <div class="login-register">
                        <p>Não tem uma conta?<a href="#" id="register-link"> Registre-se!</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Criar Conta</h2>

                <form method="post" action="./php/cadastro.php">
                    <div class="inputs-register">
                        <div class="input-block">
                            <div class="input-box">
                                <span class="icon"><ion-icon name="person"></ion-icon></span>
                                <input name="nome" type="text" required>
                                <label>Nome</label>
                            </div>

                            <div class="input-box">
                                <span class="icon"><ion-icon name="happy"></ion-icon></span>
                                <input name="nick" type="text" required>
                                <label>Nick</label>
                            </div>

                            <div class="input-box">
                                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                                <input name="email" type="mail" required>
                                <label>Email</label>
                            </div>
                        </div>

                        <div class="input-block">
                            <div class="input-box">
                                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                                <input name="senha" type="password" required>
                                <label>Senha</label>
                            </div>

                            <div class="input-box">
                                <span class="icon"><ion-icon name="call"></ion-icon></span>
                                <input name="telefone" type="tel" required>
                                <label>Telefone</label>
                            </div>

                            <div class="input-box">
                                <span class="icon"><ion-icon name="location"></ion-icon></span>
                                <input name="cidade" type="text" required>
                                <label>Cidade</label>
                            </div>
                        </div>
                    </div>

                    <div id="botao-foto">
                        <p>Escolher Foto de Perfil</p>
                        <input type="hidden" name="foto" id="foto_perfil" value="cachorro.png">
                    </div>

                    <div class="register-block">
                        <div class="remember-forgot register">
                            <label><input name="lembrar" type="checkbox">Lembre de Mim</label>
                        </div>

                        <button type="submit" class="btn">Registrar-se</button> 

                        <div class="login-register">
                            <p>Já tem uma conta?<a href="#" id="login-link"> Login!</a></p>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <div id="foto-popup">
            <h2 for="foto">Escolha sua foto</h2>

            <div>
                <label for="cachorro" class="active-label">
                    <img src="./images/fotos_perfil/cachorro.png" class="profile-pic-img"/>
                    <input id="cachorro" type="radio" name="foto" value="cachorro.png" checked="checked">
                </label>
                
                <label for="elefante">
                    <img src="./images/fotos_perfil/elefante.png"/>
                    <input id="elefante" type="radio" name="foto" value="elefante.png">
                </label>

                <label for="gato">
                    <img src="./images/fotos_perfil/gato.png"/>
                    <input id="gato" type="radio" name="foto" value="gato.png">
                </label>
            </div>

            <div>
                <label for="guaxinim">
                    <img src="./images/fotos_perfil/guaxinim.png"/>
                    <input id="guaxinim" type="radio" name="foto" value="guaxinim.png">
                </label>

                <label for="leao">
                    <img src="./images/fotos_perfil/leao.png"/>
                    <input id="leao" type="radio" name="foto" value="leao.png">
                </label>

                <label for="lontra">
                    <img src="./images/fotos_perfil/lontra.png"/>
                    <input id="lontra" type="radio" name="foto" value="lontra.png">
                </label>
            </div>

            <div>
                <button id="confirmProfilePic">Confirmar</button>
                <button id="cancelProfilePic">Cancelar</button>
            </div>
        </div>

        <div id="bg-filter"></div>

        <div id="relogio">
            <?php 
                echo '<p>',date(date("Y-m-d")),'</p>';
                echo '<p>',date("H:i"),'</p>';
            ?>
        </div>

        <h1>Museu Paulo Agostinho Sobrinho</h1>

        <div id="contador">
            <?php
                include "php/conectar.php";
                $arq = fopen("contador.txt",'r+');
                $lercontador =fread($arq,100);
                $contador=floatval($lercontador)+1;
                fseek($arq,0);
                fwrite($arq,$contador);
                fclose($arq);

                echo "<p>Você é o visitante número: ", $contador,"</p>";
            ?>
        </div>
        <div id="comentario">
            <h3>Comentários</h3>
            <?php
                $buscar = mysqli_query($conexao,"select c.id,u.nome, c.comentario FROM comentario c
                                                INNER JOIN usuario u ON c.idUser = u.id ORDER BY c.idUser;");            
                while($vetor=mysqli_fetch_array($buscar)){
                    
                    echo 
                    "<span>$vetor[1]: $vetor[2]</span>";
                    if( isset( $_SESSION["nome"] ) && $_SESSION["nome"]==$vetor[1]){
                        echo "<button onclick='mudarComentario(this.id)' id='$vetor[0]' name='$vetor[0]'>Editar</button><button onclick='deletarComentario(this.id)' id='$vetor[0]' name='$vetor[0]'>Excluir</button><br>";
                    }
                    else echo "<br>";
                }
            ?>
            </div>
        
        <section>
        
            <div id="formEditar">
                <form method="post" action ="php/editarComentario.php">
                <p>Insira o novo comentário</p>    
                <input type="hidden" id="idNovoComentario" name="idNovoComentario" value="">        
                    <textarea name="novoComentario" id="novoComentario"></textarea>
                    <input name="submit" type="submit" value="Editar">
                </form>
            </div>
        
            <div id="formExcluir">
                <form method="post" action="php/excluirComentario.php">
                    
                    <input type="hidden" id="idExcluirComentario" name="idExcluirComentario" value="">
                    <button name="cancelar" id="cancelar">Cancelar</button>
                    <input type="submit" name="confirmar" id="confirmar" value="Confirmar">
                </form>
            </div>
        
            <script>
                function mudarComentario(id){
                    const value = document.getElementById("idNovoComentario");
                    
                    value.value = id;
                    const div = document.querySelector("div#formEditar");
                    const divExcluir = document.querySelector("div#formExcluir");
                    if(div.style.opacity==0){
                        div.style.opacity = 1;
                        divExcluir.style.opacity=0;
                    }
                    else div.style.opacity =0;
                    console.log(value.value);
                    
                    }
                function deletarComentario(id){
                    const div = document.querySelector("div#formExcluir");
                    const divEditar = document.querySelector("div#formEditar");
                    const valueExcluir =  document.getElementById("idExcluirComentario");
                    valueExcluir.value = id;
                    if(div.style.opacity==0){
                        div.style.opacity = 1;
                        divEditar.style.opacity=0;
                    }
                    else div.style.opacity =0;
                    console.log(value.value);
                    
                    }
                
            </script>
        
    
        </section>
    </main>

    <footer>

        <img src="./images/logo_ifsp.png" alt="logo ifsp">

        <p>Política de privacidade | © 2023. Todos os direitos reservados.</p>
        
        <div>
            <p>Navegue: </p>
            <a href="./html/creditos.html">Equipe de Desenvolvimento</a>
            <a href="html/historiaMuseu.html">História do Museu</a>
            <?php 
                if( isset( $_SESSION['logado'] ) ) {
                    echo'<a href="./php/postLogin.php">Pós Login</a>';
                }
             ?>
        </div>

    </footer>

    <script src="./js/index.js"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>