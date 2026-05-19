<?php
$palabra = $_POST ["palabra"];

$cantidad = strlen($palabra);

echo "<h1>";
echo "la palabra tiene: " . $cantidad . " letras";
echo "</h1>";

?>