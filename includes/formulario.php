
    

    
    <input type="hidden" name="operacao" value="inclusao">

<form method="POST" enctype="multipart/form-data" action="etapa.php">
    <fieldset>    
        <legend>Cadastre-se</legend>
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br>
        
        <label for="usuario">Nome de usuario:</label>
        <input type="text" name="usuario" id="usuario"><br>
        
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha"><br>
        
        <label for="CPF">CPF:</label>
        <input type="text" name="CPF" id="CPF"><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>
        
        <label for="confirmar">Confirmar:</label>
        <input type="email" name="confirmar" id="confirmar"><br>
            
            <label for="sexo">Sexo:</label>
            <select name="sexo" id="sexo">
                <option value="">Selecione seu sexo</option>
                <option value="Feminino">Feminino</option>
                <option value="Masculino">Masculino</option>
                <option value="Outro">Outro</option>
            </select><br>
            
        <label for="data">Data:</label>
        <input type="text" name="data" id="data"><br>
        
            <label for="estados">Estados:</label>
            <select name="estados" id="estados">
                <option value="">Selecione o Estado em que mora</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santos</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
         <br>
         <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade"><br>
        
        <input type="submit" value="Prosseguir" name="prosseguir">
    </fieldset>
</form>

    


