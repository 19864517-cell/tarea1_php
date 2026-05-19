<?php
$nombre = $_POST ["nombre"];
$horas = $_POST ["horas"];
$pago = $_POST ["pago"];

$salario = $horas * $pago;

echo "<h1>";

echo "trabajador: " . $nombre;
echo "<br><br>";

echo "su salario total es de: " . $salario;

echo "</h1>";

?>