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

    <?php
    if (isset($_GET['matricula'])) {
        $matricula = $_GET['matricula'];
    $result = mysqli_query($conn, "SELECT * FROM Aluno WHERE matricula='matricula'");
    foreach ($result as $linha) {

    ?>

    <form method="post">

        <label>Nome</label> <br />
        <input type="text" value="<?php echo $linha ['nome'];?>" name="nome"> <br />

        <label>CPF</label> <br />
        <input type="text" name="cpf" value="<?php echo $linha ['cpf'];?>" > <br />

        <select>
            <option>Aluno</option>
            <option>Professor</option>
            <option>BETA</option>
        </select> <button name="atualizar" value="<?php echo $matricula; ?>">CADASTRAR</button>
    </form>

    <?php } } ?>

    <center><a href="index.html">INÍCIO</a></center>
</body>

</html>