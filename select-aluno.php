<?php
    include("connectbd.php");
    if(isset($_GET['matricula'])){
        $matricula = $_GET['matricula'];
        $apagar = mysqli_query($conn,"DELETE FROM aluno WHERE matricula = '$matricula'");
        if ($apagar){
            echo 'DELETE sucesso';
        }
        else echo  'DELETE erro';

    }
?>

<html>
<header>
    <style>
        table {
            border: 1px solid #000;
            border-spacing: 0px;
        }

        table td,
        th {
            border: 1px solid #000;
            padding: 5px;
        }
    </style>
</header>

<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>CPF</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("connectbd.php");
            $resultado = mysqli_query($conn, "SELECT * FROM `aluno` ORDER BY `aluno`.`matricula` ASC
            ");
            while ($linha = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?php echo $linha['matricula']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['CPF']; ?></td>
                    <td><a href="update.php?matricula=<?php echo $linha['matricula']; ?>">Editar</a> - <a href="?matricula=<?php echo $linha['matricula']; ?>">Eliminar</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <center><a href="index.html">INÍCIO</a></center>

</body>

</html>