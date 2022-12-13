<p>
    <b>4)</b> Leia 3 números e imprimi-los em ordem decrescente
    (suponha números diferentes): <br><br>
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

//If para Mostrar o maior
if (($num01 > $num02) && ($num01 > $num03)) {
    print("<h2>$num01</h2> <br>");
} else if (($num02 > $num01) && ($num02 > $num03)) {
    print("<h2>$num02</h2> <br>");
} else if (($num03 > $num01) && ($num03 > $num02)) {
    print("<h2>$num03</h2> <br>");
}

//If para Mostrar o valor médio
if ((($num01 > $num02) && ($num01 < $num03)) || (($num01 < $num02) && ($num01 > $num03))) {
    print("<h2>$num01</h2> <br>");
} else if ((($num02 > $num01) && ($num02 < $num03)) || (($num02 < $num01) && ($num02 > $num03))) {
    print("<h2>$num02</h2> <br>");
} else if ((($num03 > $num01) && ($num03 < $num02)) || (($num03 < $num01) && ($num03 > $num02))) {
    print("<h2>$num03</h2> <br>");
}

//If para Mostrar o menor
if (($num01 < $num02) && ($num01 < $num03)) {
    print("<h2>$num01</h2> <br>");
} else if (($num02 < $num01) && ($num02 < $num03)) {
    print("<h2>$num02</h2> <br>");
} else if (($num03 < $num01) && ($num03 < $num02)) {
    print("<h2>$num03</h2> <br>");
}

?>