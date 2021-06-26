<?php

include './conexao.php';

$conn = getConexao();

$sql = "INSERT INTO Aluno (CPF,nome) VALUES ('45678912300','Teste Exec')";

if ($conn->exec($sql))
{
    echo 'Sucesso';
}
    else {
        echo 'Erro ao salvar';
    }

?>