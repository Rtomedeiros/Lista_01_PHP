<p>
    <b>7)</b> A biblioteca de uma universidade deseja fazer um algoritmo
    que leia o nome do livro que será emprestado, o tipo de usuário <br>
    (professor ou aluno) e possa imprimir um recibo conforme
    mostrado a seguir. <br>Considerar que o professor tem 10 dias
    para devolver o livro o aluno somente 3 dias. <br><br>
</p>

<form method="POST">
    <label>Nome do Livro:</label>
    <input type="text" name="livro"> <br>
    <label>Tipo de usuário:</label>
    <select name="tipoUser" id="tipoUser">
        <option value="professor">Professor</option>
        <option value="aluno">Aluno</option>
    </select> <br><br>
    <input type="submit" value="Emprestar Livro"> <br><br>
</form>

<?php

$tipoUser = $_POST["tipoUser"];
$dataAtual = date('d/m/Y');

print("******************************<br>");
print("************RECIBO***********<br>");
print("******************************<br>");

if (strtolower($tipoUser) == "professor") {
    $dataVencimento = date('d/m/Y', strtotime("+15 days", strtotime($dataAtual)));
    print("$dataAtual <br>");
    print("$dataVencimento");
} else if (strtolower($tipoUser) == "aluno") {
}



?>