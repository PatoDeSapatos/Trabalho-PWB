<?php
    if(isset($_POST['submitLogin'])){
        $user = $_POST['user'];
        $pass =$_POST['pass'];
        if($user=='teste' && $pass=='123456'){
            header("location: ../html/postLogin.html");
        }
    }
?>
