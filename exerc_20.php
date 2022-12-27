<p>
    <b>20)</b> Crie um formulário onde o usuário informa seu nome,
    seu e-mail, sua data de nascimento e escolha numa lista suspensa
    a bandeira do seu cartão de crédito.<br>
    Ao clicar em em botão de submit,
    exiba todos os dados na tela e não exiba o formulário após o preenchimento.
</p>

<!DOCTYPE html>
<html>

<head>
    <title>Formulário</title>
    <meta charset="utf-8" />
</head>

<body>
    <form action="exerc_20_final.php" method="POST">
        <fieldset>
            <legend>Cadastro de Usuário:</legend>
            <p>
                <label><b>Nome do Usuário:</b></label>
                <input type="text" name="nome">
            </p>
            <p>
                <label><b>E-mail:</b></label>
                <input type="email" name="email">
            </p>
            <p>
                <label><b>Data de nascimento:</b></label>
                <input type="date" name="dataNasc">
            </p>
            <p>
                <label><b>Cartão de Crédito:</b></label><br>
                <select name="cartao">
                    <option value="Visa">Visa</option>
                    <option value="Master Card">Master Card</option>
                    <option value="Maestro">Maestro</option>
                    <option>Elo</option>
                    <option value="American Express">American Express</option>
                </select>
            </p>
            <p>
                <button type="submit"><b>Submit</button>
            </p>
        </fieldset>
    </form>
</body>

</html>