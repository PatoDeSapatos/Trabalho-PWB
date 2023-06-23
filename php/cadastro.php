<?php
    if(isset($_POST['nome'])){
        include 'functions.php';
        
        $conexao=mysqli_connect("18.230.6.129","HT301410X","HT301410X","HT301410X");
        $nomeTabela="HT301410X";
        $nome =$_POST['nome'];
        $nick=$_POST['nick'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $fone=$_POST['fone'];
        $cidade=$_POST['cidade'];
        $foto=$_POST['foto'];
        $data = date("Y-m-d");
        
        $nomeExiste = mysqli_query($conexao,"select nome from usuario where nome='$nome'");
        $nickExiste = mysqli_query($conexao,"select nick from usuario where nome='$nick'");
        $emailExiste = mysqli_query($conexao,"select email from usuario where nome='$email'");
        $foneExiste = mysqli_query($conexao,"select telefone from usuario where nome='$fone'");


        if(mysqli_num_rows($nomeExiste)==0 || mysqli_num_rows($nickExiste)==0){
            if(mysqli_num_rows($emailExiste) ==0 || mysqli_num_rows($foneExiste)==0){
                $valores=array($nome,$nick,$email,$senha,$fone,$cidade,$foto,$data);
                $inserir=mysqli_query($conexao,"insert into `usuario`(`nome`, `nick`, `email`, `senha`, `telefone`, `cidade`, `foto`, `datac`) 
                VALUES ('$nome','$nick','$email','$senha','$fone','$cidade','$foto','$data')");
                echo "Cadastro realizado com sucesso!";
                echo "voltar para página inicial: <a href='../index.php'>Página inicial</a>";
            }
            else {
                echo "<script language='JavaScript' charset='utf-8'>alert('Dados já existem!')</script>";
                echo "<meta HTTP-EQUIV='refresh' CONTENT='0; URL=../registro.html'>";
            }
        }
        else {
            echo "<script language='JavaScript' charset='utf-8'>alert('Dados já existem!')</script>";
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0; URL=../registro.html'>";
        }
        
    }
?>