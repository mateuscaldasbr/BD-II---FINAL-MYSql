<?php 
    $servidor = 'mysql742.umbler.com';
    $usuario = 'mateus';
    $senha = 'kHDH9V44rwJL53M';
    $banco = 'bdacademico';
    
    $con = mysqli_connect($servidor, $usuario, $senha, $banco);     

        if (isset ($_POST['cadastrar'])){
        
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];

        $query = mysqli_query($con, "INSERT INTO Aluno (CPF, nome) VALUES ('$cpf', '$nome')");
    
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