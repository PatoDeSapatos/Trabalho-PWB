<?php
    /**
     *  Adiciona valores em uma tabela de um banco de dados sql
     * 
     * @param object $conexao Conexão com o banco de dados
     * @param string $nomeTabela Nome da tabela no banco
     * @param array $valores Array com os valores a serem adicionados
     * @param array $colunasExcluidas (opcional) Colunas que devem ser ignoradas
     * @return boolean|object Retorna o mysqli_query da inserção de dados
     * @author Felipe Fernandes Alves <https://github.com/PatoDeSapatos>
     */
    function adicionar_a_tabela( $conexao, $nomeTabela, $valores, $colunasExcluidas = false ) {
        // TODO melhorar para retornar erro no slq
        $sql = "SHOW COLUMNS FROM $nomeTabela WHERE FIELD NOT IN ( 'id";
        if ( $colunasExcluidas != false ) {
            $sql .= "', '".implode("' , '", $colunasExcluidas);   
        }
        $sql .= "' )";

        $colunas = mysqli_query($conexao, $sql);

        for ($i = 1; $linha = mysqli_fetch_array($colunas); $i++) { 
            $nomeColunas[$i] = $linha[0];
        }

        echo $colunasString = implode(", ", $nomeColunas);
        echo $valoresString = "'".implode("', '", $valores)."'";
        $sql =
            "
                INSERT INTO $nomeTabela ($colunasString)
                VALUES ($valoresString);
            ";
        
        return mysqli_query($conexao, $sql);
    }
?>