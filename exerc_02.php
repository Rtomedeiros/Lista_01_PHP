<?php
echo ("2) Leia um número e informe se ele é divisível por 10, por 5, por 2 ou se não é divisível por
nenhum destes:");
?>

<form method="get">
    <br>
    <label>num = </label>
    <input type="text" name="num"> <br><br>
    <input type="submit" value="Resposta"> <br>
    <br>
</form>

<?php
$num = 0;
$num = intval($_GET["num"]);

$div10 = $num % 10;
$div5 = $num % 5;
$div2 = $num % 2;

if ($div10 == 0) {
    print("$num é divisível por 10. <br>");
}
if ($div5 == 0) {
    print("$num é divisível por 5. <br>");
}
if ($div2 == 0) {
    print("$num é divisível por 2. <br>");
}

?>