<?php
    if(isset($_POST['user'])&& isset($_POST['pass'])){
        $user = $_POST['user'];
        $pass =$_POST['pass'];
        if($user=='teste'&& $pass=='123456'){
            header("location: ./postLogin.html");
        }
    }
?>