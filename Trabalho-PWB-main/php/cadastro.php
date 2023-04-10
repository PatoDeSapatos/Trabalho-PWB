<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="post" action="">
            nome: <input type="text" name="user"><br>
            senha: <input type="password" name="pass"><br>
            confirmar senha: <input type="password" name="confirmarSenha"><br>
            email: <input type="email" name="email"><br>
            <input type="submit" value="submeter">

        </form>
        
    </body>
</html>
<?php
    if(isset($_POST['user'])&& isset($_POST['pass'])){
        if(isset($_POST['confirmarSenha'])&& isset($_POST['email'])){
            $nome = $_POST['user'];
            $senha = $_POST['pass'];
            $senhaCf = $_POST['confirmarSenha'];
            $email = $_POST['email'];
            
            if($senha==$senhaCf) header("location: login.php");
            
            else echo "<div id='aviso'><p>Senhas diferentes</p></div>";


            }
        }

?>