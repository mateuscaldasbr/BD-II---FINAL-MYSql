<?php
$servidor = 'mysql742.umbler.com';
$usuario = 'mateus';
$senha = 'kHDH9V44rwJL53M';
$banco = 'bdacademico';

$con = mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Erro ao conectar no Banco de Dados");
