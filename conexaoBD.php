<?php
    $servidor = "loscalhost";
    $dbname = "bd-academico-final";
    $dbusuario = "root";
    $dbsenha = "";
    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

    if(!$conn){
        die("conexao falhou: " . mysqli_connect_error($conn));
    }
?>