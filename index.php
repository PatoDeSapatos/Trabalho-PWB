<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Museu</title>
</head>
<body>
    <header id="indexHeader">
        <h1>Logo</h1>
        <nav>
            <a href="html/historiaMuseu.html">História do Museu</a>
            <a href="./html/creditos.html">Créditos da Equipe</a>
            <button class="btnLogin">Login</button>
        </nav>
    </header>

    <main>
        <div id="wrapper">
            <span id="icon-close">
                <ion-icon name="close"></ion-icon>
            </span>

            <div class="form-box login">
                <h2>Login</h2>
                <form method="post" action="./index.php">
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

                    <div id="remember-forgot">
                        <label><input type="checkbox">Lembre de Mim</label>
                        <a href="#">Esqueceu a senha?</a>
                    </div>

                    <button name="submitLogin" type="submit" class="btn">Login</button>

                    <div id="login-register">
                        <p>Não tem uma conta?<a href="#" id="register-link"> Registre-se!</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Criar Conta</h2>
                <form action="#">

                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" required>
                        <label>Nome</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="mail" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required>
                        <label>Senha</label>
                    </div>

                    <div id="remember-forgot">
                        <label><input type="checkbox">Lembre de Mim</label>
                        <a href="#">Esqueceu a senha?</a>
                    </div>

                    <button type="submit" class="btn">Registrar-se</button>

                    <div id="login-register">
                        <p>Já tem uma conta?<a href="#" id="login-link"> Login!</a></p>
                    </div>
                </form>
            </div>
        </div>

        <div id="bg-filter"></div>

        <h1>Museu de Racatinga</h1>

        <div id="contador">
            <?php
                $arq = fopen("contador.txt",'r+');
                $lercontador =fread($arq,100);
                $contador=floatval($lercontador)+1;
                fseek($arq,0);
                fwrite($arq,$contador);
                fclose($arq);

                echo "<p>Você é o visitante número: ", $contador,"</p>";

                if(isset($_POST['submitLogin'])){
                    $user = $_POST['user'];
                    $pass =$_POST['pass'];
                    if($user=='teste' && $pass=='123456'){
                        header("location: ./html/postLogin.html");
                    }
                }
            ?>
        </div>
    </main>

    <footer>

        <img src="./images/logo_ifsp.png" alt="logo ifsp">
        
        <div>
            <p>Navegue: </p>
            <a href="./html/creditos.html">Créditos</a>
            <a href="./html/contador.html">Contador</a>
        </div>

    </footer>

    <script src="./js/index.js"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>