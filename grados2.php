<?php
$grados = $_POST ["grados"];

$fahrenheit = ($grados * 9 / 5) + 32;

echo "<h1>";

echo "la temperatura en fahrenheit es: " . $fahrenheit . " °F";

echo "</h1>";

?>