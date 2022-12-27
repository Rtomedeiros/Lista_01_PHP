<p>
    <b>21)</b> Usando o método GET, crie um formulário que receba
    o nome do estudante, 3 notas de Zero a Dez e calcule a média
    quando um botão de submit for pressionado!<br>
    Faça a validação dos campos de modo que usuário tenha que preencher
    todos os campos e todos numéricos.
</p>

<!DOCTYPE html>
<html>

<head>
    <title>Média do Aluno</title>
    <meta charset="utf-8" />
</head>

<body>
    <form action="exerc_21_final.php" method="GET">
        <fieldset>
            <legend>Média do aluno:</legend>
            <p>
                <label><b>Nome do Aluno:</b></label>
                <input type="text" name="nome" required>
            </p>
            <p>
                <label><b>Nota 1:</b></label>
                <input type="number" name="nota01" min="0" max="10" required>
            </p>
            <p>
                <label><b>Nota 2:</b></label>
                <input type="number" name="nota02" min="0" max="10" required>
            </p>
            <p>
                <label><b>Nota 3:</b></label>
                <input type="number" name="nota03" min="0" max="10" required>
            </p>
            <p>
                <button type="submit"><b>Submit</b></button>
            </p>
        </fieldset>
    </form>
</body>

</html>