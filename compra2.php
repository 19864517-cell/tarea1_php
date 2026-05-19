<?php
$monto = $_POST ["monto"];

if ($monto >= 25){
    $descuento = $monto * 0.10;
    $total = $monto - $descuento;

    echo "<h1>";

    echo "aplico al descuento del 10%";
    echo "<br>";

    echo "total a pagar: " . $total;

}
else{
    echo "no aplica al descuento";
    echo "<br>";
    echo "total a pagar: " . $monto;

    echo "</h1>";
}

?>