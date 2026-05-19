<?php
$precio = $_POST ["precio"];

$iva = $precio * 0.13;
 
$total = $precio + $iva;

echo "<h1>";

echo "iva: " . $iva;
echo "<br><br>";

echo "total con iva: " . $total;
echo "</h1>";

?>