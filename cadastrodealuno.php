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
    
    <p>Prencher os dados do aluno(a): </p>
    <fieldset><legend> Cadastro de aluno(a)</legend>
        <form method="post" action="cadastro_aluno.php">
            <label for="aluno"> Nome:</label>
            <input type="text" id="aluno" name="aluno"><br>
            <label for="cpf"> CPF:</label>
            <input type="text" id="cpf" name="cpf"><br>
            (sem espaços e sem pontos ou traços)<br>
            <label for="endereço"> Endereço:</label>
            <input type="text" id="endereco" name="endereco"><br>
            <label for="complemento"> Complemento:</label>
            <input type="text" id="complemento" name="complemento"><br>
            <label for="cep"> CEP:</label>
            <input type="text" id="cep" name="cep"><br>
            <label for="bairro"> Bairro:</label>
            <input type="text" id="bairro" name="bairro"><br>
            <label for="cidade"> Cidade:</label>
            <input type="text" id="cidade" name="cidade"><br>
            <label for="estado"> Estado:</label>
                <select name="estado" id="select">
                    <option value=""> Selecione o Estado</option>
                    <option value=""> Selecione o Estado</option>
                    <option value="ac"> Acre</option>
                    <option value="al"> Alagoas</option>
                    <option value="ap"> Amapá</option>
                    <option value="am"> Amazonas</option>
                    <option value="ba"> Bahia</option>
                    <option value="ce"> Ceará</option>
                    <option value="df"> Distrito FEderal</option>
                    <option value="es"> Espirito Santo</option>
                    <option value="go"> Goiás</option>
                    <option value="ma"> Maranhão</option>
                    <option value="ms"> Mato Grosso do Sul</option>
                    <option value="mt"> Mato Grosso</option>
                    <option value="mg"> Minas Gerais</option>
                    <option value="pa"> Pará</option>
                    <option value="pb"> Paraíba</option>
                    <option value="pr"> Paraná</option>
                    <option value="pe"> Pernambuco</option>
                    <option value="pi"> Piauí</option>
                    <option value="rj"> Rio de Janeiro</option>
                    <option value="rn"> Rio Grande do Norte</option>
                    <option value="rs"> Rio Grande do Sul</option>
                    <option value="ro"> Rondônia</option>
                    <option value="rr"> Roraima</option>
                    <option value="sc"> Santa Catarina</option>
                    <option value="sp"> São Paulo</option>
                    <option value="se"> Sergipe</option>
                    <option value="to"> Tocantins</option>
                </select>
        <br>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone"><br> <br>
            <input type="reset" value="Limpar" name="limpar">
            <input type="submit" value="Enviar" name="submit"><br>
        </form>
    </fieldset>

</body>
</html>