<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <div>
        <h3>Seus comentários</h3>
        <?php
            include "conectar.php";
            $buscar = mysqli_query($conexao,"select c.id,u.nome, c.comentario FROM comentario c INNER JOIN usuario u ON c.idUser = u.id ORDER BY c.idUser;");
            while($vetor=mysqli_fetch_array($buscar)){
                if($_SESSION["nome"]==$vetor[1]){
                    echo "<div><p>$vetor[0] : $vetor[1] : <span>$vetor[2]</span>";
                    $nome = $_SESSION["nome"];
                }
                
            }
        ?>
        </div>
        <form method="post">
            <div class="input-box">
                <label>Escolha o número a ser atualizado:</label>
                <select name="selectComentario" required>
                    <?php
                        include "conectar.php";
                        $buscar = mysqli_query($conexao,"select c.id,u.nome, c.comentario FROM comentario c INNER JOIN usuario u ON c.idUser = u.id ORDER BY c.idUser;");
                        while($vetor=mysqli_fetch_array($buscar)){
                            if($_SESSION["nome"]==$vetor[1]){
                            echo "<option value=".$vetor[0].">".$vetor[0]."</option>";
                            }
                        }
                    ?>
                </select>
                <p></p><label>Comentário:</label>
                    <br><textarea name="comentario"></textarea>
                </div>
                <p></p>
                <button type="submit" name="submeter" class="btn">Atualizar</button> <a href="postLogin.php">Voltar</a>
                <?php
                    if(isset($_POST['submeter'])){
                        include "conectar.php";
                        $comentarioNovo = $_POST["comentario"];
                        $idComentario = $_POST["selectComentario"];
                        $query= mysqli_query($conexao,"UPDATE `comentario` SET `comentario`='$comentarioNovo' WHERE id=$idComentario");
                        echo "<p>Atualizado com sucesso!";
                    }
                ?>    
            </div>
        </form>
    </body>
</html>

