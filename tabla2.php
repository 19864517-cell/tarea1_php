<?php
$numero = $_POST ["numero"];

echo "<h1>TABLA DEL " . $numero;
echo "</h1>";

for ($i = 1; $i <= 10; $i++){

echo $numero . " x " . $i . "=" . ($numero * $i);
echo "<br>";

}

?>