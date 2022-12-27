<?php
$nome = $_GET["nome"];
$nota01 = intval($_GET["nota01"]);
$nota02 = intval($_GET["nota02"]);
$nota03 = intval($_GET["nota03"]);

$media = ($nota01 + $nota02 + $nota03) / 3.0;

print("<b>Nome do Aluno:</b> " . $nome . "<br>");
print("<b>Nota 01:</b> " . $nota01 . "<br>");
print("<b>Nota 02:</b> " . $nota02 . "<br>");
print("<b>Nota 03:</b> " . $nota03 . "<br>");
print("<b>__________________________</b><br>");
print("<b>Média:</b> " . $media . "<br>");
