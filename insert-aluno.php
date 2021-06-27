<?php
include('connectbd.php');

if (isset($_POST['cadastrar'])) {

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    $query = mysqli_query($conn, "INSERT INTO Aluno (CPF, nome) VALUES ('$cpf', '$nome')");

    if ($query) {
        echo "Sucesso";
    } else {
        echo "Erro";
    }
}
?>

<html>

<head>
    <title>Insira os dados do aluno</title>
</head>

<body>
    <form method="post">

        <label>Nome</label> <br/>
        <input type="text" name="nome"> <br/>

        <label>CPF</label> <br/>
        <input type="text" name="cpf"> <br/>

        <select>
            <option>Aluno</option>
            <option>Professor</option>
        </select> <button name="cadastrar">CADASTRAR</button>
    </form>

    <center><a href="index.html">INÍCIO</a></center>
</body>

</html>