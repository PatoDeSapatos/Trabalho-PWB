<html>
    <header></header>
    <body>
        <h2>Criar Conta</h2>
            <form method="post" action="./php/cadastro.php">

                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input name="nome" type="text" required>
                    <label>Nome</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input name="nick" type="text" required>
                    <label>Nick</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input name="email" type="mail" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input name="senha" type="password" required>
                    <label>Senha</label>
                </div>
                            
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input name="fone" type="text" required>
                    <label>Telefone</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input name="cidade" type="text" required>
                    <label>Cidade</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input name="foto" type="file" accept="image/*" required>
                    <label>Foto</label>
                </div>

                <div id="remember-forgot">
                    <label><input name="lembrar" type="checkbox">Lembre de Mim</label>
                </div>

                <button type="submit" class="btn">Registrar-se</button> 

                <div class="login-register">
                    <p>Já tem uma conta?<a href="#" id="login-link"> Login!</a></p>
                </div>
            </form>
    </body>
</html>
<?php
    if(isset($_POST['foto'])){
    $nome =$_POST['nome'];
    $nick =$_POST['nick'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $fone=$_POST['fone'];
    $cidade=$_POST['cidade'];
    $foto=$_POST['foto'];
    $data = date("Y-m-d");
    include 'php/functions.php';
    $conexao=mysqli_connect("localhost","root","","pwb2bim");
    $gravar=mysqli_query($conexao,"INSERT INTO `usuarios`(`nome`, `nick`, `email`, `senha`, `telefone`, `cidade`, `foto`, `datac`)
    VALUES ('$nome','$nick','$email','$senha','$fone','$cidade','$foto',$data)");
    }
?>