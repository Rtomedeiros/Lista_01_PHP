<p>
    <b>3)</b> Leia nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que <br>
    25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a <br>
    mensagem: NÃO ACEITA <br><br>
</p>

<form method="post">
    <label>Nome:</label>
    <input type="text" name="nome"> <br>
    <label>Sexo:</label>
    <input type="text" name="sexo"> <br>
    <label>Idade:</label>
    <input type="text" name="idade"> <br><br>
    <input type="submit" value="Resposta">
</form>

<?php
$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$idade = intval($_POST["idade"]);

$sexoLow = strtolower($sexo); //função strtolower() para comparar o sexo escrito com letra minuscula.

if (($sexoLow == "feminino") && ($idade < 25)) {
    print("$nome ACEITA!");
} else {
    print("$nome NÃO ACEITA!");
}
?>