<?php include("conexaoBD.php") 
    if (isset ($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];

        $query = mysqli_query($con, "INSERT INTO Aluno (CPF, nome) VALUE ('$cpf', '$nome')")
    
        if($query){
            echo 'Cadastro realizado com sucesso'
        }
        else {
            'Deu ruim, não foi possível cadastrar'
        }
    }
?>

<html>
    <head>
        <title>INSERT ALUNO</title>
    </head>
    <body>
        <form>
            <label>CPF</label><br/>
            <input type="text" name="cpf"><br/>
            
            <label>Nome</label><br/>
            <input type="text" name="nome"><br/>

            <select>
                <option>Aluno</option>
                <option>Professor</option>
            </select>

            <br/>

            <button name="cadastrar">CADASTRAR</button>
        </form>
    </body>
</html>