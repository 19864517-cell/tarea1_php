<?php
$nombre = $_POST ["nombre"];
$producto = $_POST ["producto"];
$cantidad = $_POST ["cantidad"];
$precio = $_POST ["precio"];
 
$subtotal = $cantidad * $precio;
$total = $subtotal;

echo "<h1>FACTURA";
echo "<br><br>";

echo "cliente: " . $nombre;
echo "<br><br>";

echo "producto: " . $producto;
echo "<br><br>";

echo "cantidad: " . $cantidad;
echo "<br><br>";

echo "precio unitario : " . $precio;
echo "<br><br>";

echo "subtotal: " . $subtotal;
echo "<br><br>";

echo "total a pagar: " . $total;
echo "</h1>";

?>