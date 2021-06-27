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
            </tr>
        </thead>
        <tbody>
            <?php
            include("connectbd.php");
            $resultado = mysqli_query($conn, "SELECT * FROM Aluno");
            while ($linha = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?php echo $linha['matricula']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['CPF']; ?></td>
                <?php }
                ?>
                </tr>
        </tbody>
    </table>
</body>

</html>