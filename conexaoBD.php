<?php
$servidor = 'mysql742.umbler.com';
$usuario = 'mateus';
$senha = 'kHDH9V44rwJL53M';
$banco = 'bdacademico';

$con = new mysqli($servidor, $usuario, $senha, $banco);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}else{
echo "Conectou !!";
} 

?>