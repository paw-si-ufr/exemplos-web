<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form name="form-aula" id="form-aula" method="POST" action="recebe_dados.php">
            <fieldset>
                <legend>Dados Pessoais</legend>
                <label for="txt-primeiro-nome">Primeiro nome:</label>
                <input id="txt-primeiro-nome" type="text" name="primeiro-nome" />
                <br />
                Segundo nome: <input id="segundo" type="text" name="segundo-nome" />
                <br />
                Sexo: M: <input type="radio" name="sexo" value="M" />
                      F: <input type="radio" name="sexo" value="F" />
                <br />
            </fieldset>
            <fieldset>
                <legend>Endereço</legend>
                Endereço Completo:
                <br />
                <select name="lista-cidade">
                    <option value="1">Rondonópolis</option>
                    <option value="2">Cuiabá</option>
                </select>
                <br />
                <textarea cols="40" rows="4" name="endereco"></textarea>
            </fieldset>
           <input type="submit" value="Enviar" />               
       </form>
</body>
</html>