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
    <title>Atualizar os dados do aluno</title>
</head>

<body>
    <?php
    if (isset($_GET['matricula'])) {
        $matricula = $_GET['matricula'];
        $result = mysqli_query($conn, "SELECT * FROM aluno WHERE matricula='$matricula'");
        foreach ($result as $linha) {

    ?>

            <form method="post">

                <label>Nome</label><br />
                <input type="text" value="<?php echo $linha['nome']; ?>" name="nome"><br /><br />

                <label>CPF</label><br />
                <input type="text" name="CPF" value="<?php echo $linha['CPF']; ?>"><br /><br />

                <select>
                    <option>Aluno</option>
                    <option>Professor</option>
                </select>
                <br /><br />
                <button name="atualizar" value="<?php echo $matricula; ?>">ATUALIZAR</button>
            </form>
    <?php }
    }
    ?>

    <center><a href="index.html">INÍCIO</a></center>
</body>

</html>