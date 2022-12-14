<p>
    <b>7)</b> A biblioteca de uma universidade deseja fazer um algoritmo
    que leia o nome do livro que será emprestado, o tipo de usuário <br>
    (professor ou aluno) e possa imprimir um recibo conforme
    mostrado a seguir. <br>Considerar que o professor tem 10 dias
    para devolver o livro o aluno somente 3 dias: <br><br>
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
$livro = $_POST["livro"];

if (strtolower($tipoUser) == "professor") {
    $dataVencimento = date('d/m/Y', strtotime("+10 days"));
    //print("$dataAtual <br>");
    //print("$dataVencimento <br>");

    print("*******************************<br>");
    print("************RECIBO************<br>");
    print("*******************************<br>");
    print("<br>");
    print("Livro: $livro <br>");
    print("Data Emprestimo: $dataAtual <br>");
    print("Data Devolução: $dataVencimento <br>");
    print("******************************<br>");
} else if (strtolower($tipoUser) == "aluno") {
    $dataVencimento = date('d/m/Y', strtotime("+3 days"));

    print("*******************************<br>");
    print("************RECIBO************<br>");
    print("*******************************<br>");
    print("<br>");
    print("Livro: $livro <br>");
    print("Data Emprestimo: $dataAtual <br>");
    print("Data Devolução: $dataVencimento <br>");
    print("******************************<br>");
}

?>