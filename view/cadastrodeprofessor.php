<?php include_once("header.php");?>
<div style="height: 150px"></div>
<body>

<div class="card ">    
    <p>Prencher os dados do professor(a): </p>
    <fieldset><legend> Cadastro de professor(a)</legend>
        <form method="post" action="cadastro_professor.php">
           
            <div class="form-group mb-2">
                <label for="aluno"> Nome:</label>
                <input type="text" id="aluno" name="aluno" class="form-control"><br>
            </div>

            <div class="form-group mb-2">
            <label for="cpf"> CPF:</label>
            <input type="text" id="cpf" name="cpf" class="form-control"><br>
            (sem espaços e sem pontos ou traços)<br>
            </div>
            
            <div class="form-group">
                <label for="endereço"> Endereço:</label>
                <input type="text" id="endereco" name="endereco"class="form-control"><br>
            </div>
            
            <div class="form-group">
                <label for="complemento"> Complemento:</label>
                <input type="text" id="complemento" name="complemento" class="form-control"><br>
            </div>

            <div class="form-group">
                <label for="cep"> CEP:</label>
                <input type="text" id="cep" name="cep" class="form-control"><br>
            </div>

             <div class="form-group">
                <label for="bairro"> Bairro:</label>
                <input type="text" id="bairro" name="bairro" class="form-control"><br>
            </div>
            
            <div class="form-group">
                <label for="cidade"> Cidade:</label>
                <input type="text" id="cidade" name="cidade" class="form-control"><br>
            </div>
            
            <div class="form-group">
                <label for="estado"> Estado:</label>
                    <select class="form-control" name="estado" id="select">
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
            </div>
        <br>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone"><br>
            - Informações Acadêmicas<br>
            <label for="formacao"> Formação:</label> <br>
            <input type="text" id ="formacao" name="formacao"><br>
            <label for="titulacao"> Titulação:</label><br>
            <select name=titulacao id="select">
                <option value="">Selecione a Titulação</option>
                <option value="graduacao">Graduação</option>
                <option value="mestrado">Mestrado</option>
                <option value="doutorado">Doutorado</option>
                </select>
                <br>
            <input type="reset" value="Limpar" name="limpar">
            <input type="submit" value="Enviar" name="submit"><br>
        </form>
    </fieldset>
</div>
</body>
</html>