<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Aluno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <p>Prencher os dados do curso </p>
    <fieldset><legend> Cadastro de Curso</legend>
        <form method="post" action="cadastro_curso.php">
            <label for="aluno"> Nome:</label>
            <input type="text" id="aluno" name="aluno"><br>
            <label for="duracao"> Duração:</label>
            <input type="text" id="duracao" name="duracao">meses<br>
            <label for="coordenador">Selecione coordenador:</label>
                <select name="coordenador" id="select">
                    <?php 
                        include_once("conexao.php");

                        $stmt = $conn->prepare("SELECT cpf, nome FROM professor");

                        $stmt->execute();
                        
                        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){

                            echo ("<option value='". $linha['cpf']."'>".$linha['nome']."</option>");
                        }                        
                                
                           
                    ?>
                    </select>
            <input type="reset" value="Limpar" name="limpar">
            <input type="submit" value="Enviar" name="submit"><br>
        </form>
    </fieldset>

</body>
</html>


