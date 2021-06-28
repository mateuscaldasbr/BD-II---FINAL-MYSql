<?php
include('connectbd.php');

if (isset($_POST['atualizar'])) {

    $nome = $_POST['nome'];
    $cpf = $_POST['CPF'];
    $matricula = $_POST['atualizar'];

    $query = mysqli_query($conn, "UPDATE aluno SET nome='$nome', CPF='$cpf' WHERE matricula='$matricula'");

    if ($query) {
        echo "UPDATE Sucesso";
    } else {
        echo "UPDATE Erro";
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

                <!--<select>
                    <option>Aluno</option>
                    <option>Professor</option>
                </select>-->
                <br /><br />
                <button name="atualizar" value="<?php echo $matricula; ?>">ATUALIZAR</button>
            </form>
    <?php }
    }
    ?>
    <left><a href="select-aluno.php">VISUALIZAR TABELA ATUALIZADA</a></left>
    <br/>
    <center><a href="index.html">INÍCIO</a></center>
</body>

</html>