<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="../css/teste.css">
</head>
<body>
<div id="divComentario">
            <?php
                include "conectar.php";
                $buscar = mysqli_query($conexao,"select c.id,u.nome, c.comentario FROM comentario c
                                                INNER JOIN usuario u ON c.idUser = u.id ORDER BY c.idUser;");            
                while($vetor=mysqli_fetch_array($buscar)){
                    
                    echo "<p id='comment'><span id='nome'>$vetor[1]</span> : <span id='comentario'>$vetor[2]</span></p>";
                    if( isset( $_SESSION["nome"] ) && $_SESSION["nome"]==$vetor[1]){
                        echo "<button onclick='mudarComentario(this.id)' id='$vetor[0]' name='$vetor[0]'>Editar</button><p></p>";
                    }
                    else echo "<br>";
                }
            ?>
            </div>
    </body>
</html>