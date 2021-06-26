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
                <option>CPF</option>
                <option>Nome</option>
            </select>

            <button>Insert</button>
        </form>
    </body>
</html>