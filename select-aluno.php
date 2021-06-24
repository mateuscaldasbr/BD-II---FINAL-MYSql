<html>

<head>
	
    <title>SELECT FROM "Alunos"</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>


<body>

<?

    # dados para conexão com o banco de dados

    $servidor = 'localhost';

    $usuario = 'root';

    $senha = '';

    $banco = 'bd-academico-final';

    # executa a conexão com o MySQL

    $link = mysqli_connect("$servidor", "$usuario", "$senha", "$banco"); 
  mysqli_select_db($link,'test');

    # Cria a expressão sql de consulta aos registros

    $sql="SELECT * FROM 'Aluno'";

?>

    <TABLE border=1>
<TR>
    <TD>Matricula</TD>
    <TD>CPF</TD>
    <TD>Nome</TD>
</TR>

<?
	
    # executa a expressão sql no servidor, e armazena o resultado

$result = mysqli_query($link, $sql) or die(mysqli_error($link));

  
   while($tbl = mysqli_fetch_assoc($result))
    {
        $Matricula= $tbl["matricula"];
    
        $CPF= $tbl["CPF"];

        $Nome= $tbl["nome"];

        echo "<TR>";

        echo "<TD>$Matricula</TD>";
        echo "<TD>$CPF</TD>";
        echo "<TD>$Nome</TD>";
        echo "</TR>";
    }
    echo 'A operação foi realizada com sucesso.';
?>
    </TABLE>

    <center><a href="cadastrar-registro.php">INSERIR NOVO REGISTRO</a><p></center>

	<br/><br/>

    <center><a href="visualizarealterar-registro.php">ALTERAR REGISTRO</a></center>
     
       <br/><br/>

    <center><a href="visualizareexcluir-registro.php">EXCLUIR REGISTRO</a></center>

</body>

</html>