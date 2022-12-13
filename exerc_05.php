<p>
    <b>5)</b> Leia 3 números, os possíveis lados de um triângulo,
    e imprimir a classificação de acordo com tamanho dos lados: <br><br>
</p>

<form method="GET">
    <label>Escreva um número:</label>
    <input type="text" name="num01"> <br>
    <label>Escreva um número:</label>
    <input type="text" name="num02"> <br>
    <label>Escreva um número:</label>
    <input type="text" name="num03"> <br><br>
    <input type="submit" value="Resposta"> <br><br>
</form>

<?php
$num01 = intval($_GET["num01"]);
$num02 = intval($_GET["num02"]);
$num03 = intval($_GET["num03"]);

//Referência:
//https://brasilescola.uol.com.br/matematica/classificacao-de-triangulos.htm

//If para a Classificação de Triângulo Escalêno.
//Quando as medidas dos lados são todas diferentes.
if (($num01 != $num02) && ($num01 != $num03) && ($num02 != $num03)) {
    print("<h2>Triângulo Escalêno!</h2>");
}

//If para a Classificação de Triângulo Equilátero
//Quando possui os três lados com as mesmas medidas.
else if (($num01 == $num02) && ($num01 == $num03) && ($num02 == $num03)) {
    print("<h2>Triângulo Equilátero!</h2>");
}

//If para a Classificação de Triângulo Isósceles
//Quando possui pelo menos dois lados congruentes, 
//ou seja, com a mesma medida.
else if (($num01 == $num02) || ($num01 == $num03) || ($num02 == $num03)) {
    print("<h2>Triângulo Isósceles!</h2>");
}

?>