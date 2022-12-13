<p>
    <b>6)</b> Leia um número inteiro entre 1 e 12 e escrever o mês
    correspondente. Caso o número seja fora desse intervalo,
    informar que não existe mês com este número. <br><br>
</p>

<form method="GET">
    <label>Escreva um número entre 1 e 12:</label>
    <input type="text" name="num"> <br>
    <input type="submit" value="Resposta"> <br><br>
</form>

<?php

$num = intval($_GET["num"]);

switch ($num) {
    case 1:
        print("<h2>Janeiro</h2><br>");
        break;
    case 2:
        print("<h2>Fevereiro</h2><br>");
        break;
    case 3:
        print("<h2>Março</h2><br>");
        break;
    case 4:
        print("<h2>Abril</h2><br>");
        break;
    case 5:
        print("<h2>Maio</h2><br>");
        break;
    case 6:
        print("<h2>Junho</h2><br>");
        break;
    case 7:
        print("<h2>Julho</h2><br>");
        break;
    case 8:
        print("<h2>Agosto</h2><br>");
        break;
    case 9:
        print("<h2>Setembro</h2><br>");
        break;
    case 10:
        print("<h2>Outubro</h2><br>");
        break;
    case 11:
        print("<h2>Novembro</h2><br>");
        break;
    case 12:
        print("<h2>Dezembro</h2><br>");
        break;
    default:
        print("<h2>Não existe mês com este número!");
        break;
}

?>