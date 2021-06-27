<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'bd-academico';

$conn = mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Erro ao conectar no Banco de Dados");