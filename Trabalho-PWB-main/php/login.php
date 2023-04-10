<html>
    <body>
        <form method="post" action=''>
            nome:<input type="text" name="user"><br>
            senha:<input type="text" name="pass"><br>
            <input type="submit" value="submeter">
        </form>
    </body>
</html>

<?php
    if(isset($_POST['user'])&& isset($_POST['pass'])){
        $user = $_POST['user'];
        $pass =$_POST['pass'];
        if($user=='teste'&& $pass=='123456'){
            header("location: postLogin.php");
        }
    }
?>