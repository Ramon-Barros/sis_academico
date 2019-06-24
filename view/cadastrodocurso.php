<?php include_once("header.php");?>
<div style="height: 150px"></div>
<body>
 <div class="container">
    
    <p>Prencher os dados do curso </p>
    <fieldset><legend> Cadastro de Curso</legend>
        <form method="post" action="cadastro_curso.php">

            <div class="form-group">
                <label for="aluno"> Nome:</label>
                <input type="text" id="aluno" name="aluno" class="form-control"><br>
            </div>

            <div class="form-group">
                <label for="duracao"> Duração (em meses):</label>
                <input type="text" id="duracao" name="duracao" class="form-control"><br>
            </div>
            
            <div class="form-group">    
                <label for="coordenador">Selecione coordenador:</label>
                <select class="form-control" name="coordenador" id="select">
            </div>    
                    <?php 
                        include_once("conexao.php");

                        $stmt = $conn->prepare("SELECT cpf, nome FROM professor");

                        $stmt->execute();
                        ?>

                        <?php
                        while($linha = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                    
                        
                            <option value="'<?php echo "{$linha['cpf']}"; ?>'"> <?php echo "{$linha['nome']}"; ?> </option>

                          <?php  
                        }                        
                             
                           
                    ?>
                    </select>
            <br>

            <label for="nivel">Nível:</label>
                <select name="nivel" id="select">
                            <option value="">Selecione o nível do curso</option>
                            <option value="tecnico">Técnico</option>
                            <option value="tecnologo">Tecnólogo</option>
                            <option value="bacharelado">Bacharelado</option>
                            <option value="licenciatura">Licenciatura</option>
                            <option value="especializacao">Especialização</option>
                </select>

            <br>

            <label for="modalidade">Modalidade: </label>
                <select name="modalidade" id="select">
                    <option value="">Selecione a modalidade do curso</option>
                    <option value="presencial">Presencial</option>
                    <option value="distancia">À distância</option>
                </select>

            <br>
            <br>


            <input type="reset" value="Limpar" name="limpar">
            <input type="submit" value="Enviar" name="submit"><br>
        </form>
    </fieldset>

 </div>
</body>
