<?php include("conexaoBD.php"); ?>

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

            <button name="cadastrar">CADASTRAR</button>
        </form>
    </body>
</html>