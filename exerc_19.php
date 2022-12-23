<p>
    <b>19)</b> Crie um formulário HTML que contenha:
    nome, endereço, telefone, cep, botão radio para sexo, um campo tipo select
    para escolher profissão (liste 5). Esses dados se rão enviados para um programa PHP,
    usando método POST e deverão ser impressos na tela.
</p>

<!DOCTYPE html>
<html>

<head>
    <title>Formulário</title>
    <meta charset="utf-8" />
</head>

<body>
    <form action="exerc_19_final.php" method="POST">
        <p>
            <label><b>Nome:</b></label>
            <input type="text" name="nome">
        </p>
        <p>
            <label><b>Endereço:</b></label>
            <input type="text" name="endereco">
        </p>
        <p>
            <label><b>Telefone:</b></label>
            <input type="text" name="telefone">
        </p>
        <p>
            <label><b>CEP:</b></label>
            <input type="text" name="cep">
        </p>
        <p>
            <label><b>Sexo:</b></label><br>
            <input type="radio" name="sexo" value="masculino">Masculino<br>
            <input type="radio" name="sexo" value="feminino">Feminino<br>
        </p>
        <p>
            <label><b>Profissão:</b></label><br>
            <select name="prof">
                <option value="costureiro">Costureiro</option>
                <option value="encanador">Encanador</option>
                <option value="metaleiro">Metaleiro</option>
                <option value="bombeiro">Bombeiro</option>
                <option value="churrasqueiro">Churrasqueiro</option>
            </select>
        </p>
        <p>
            <button type="submit"><b>Submit</b></button>
        </p>
    </form>
</body>

</html>