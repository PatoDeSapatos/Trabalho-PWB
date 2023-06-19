<?php
    /**
     *  Adiciona valores em uma tabela de um banco de dados sql
     * 
     * @param string $nomeTabela Nome da tabela no banco
     * @param array $valores Array com os valores a serem adicionados
     * @return boolean Retorna o mysqli_query da inserção de dados
     * @author PatoDeSapatos <https://github.com/PatoDeSapatos>
     */
    function adicionar_a_tabela( $nomeTabela, $valores ) {
        // TODO melhorar para retornar erro no slq
        include './conectar.php';
        
        $colunas = mysqli_query($conexao, "SHOW COLUMNS FROM $nomeTabela WHERE FIELD != 'id'");
        for ($i = 1; $linha = mysqli_fetch_array($colunas); $i++) { 
            $nomeColunas[$i] = $linha[0];
        }

        $colunasString = implode(", ", $nomeColunas);
        $valoresString = "'".implode("', '", $valores)."'";
        $sql =
            "
                INSERT INTO $nomeTabela ($colunasString)
                VALUES ($valoresString);
            ";
        
        return mysqli_query($conexao, $sql);
    }

?>