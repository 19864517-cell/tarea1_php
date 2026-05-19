<?php
$numero = $_POST ["numero"];

$suma = 0;

for($i = 1; $i <= $numero; $i++){
    $suma = $suma + $i;

}
echo "<h1>";

echo "la suma es: " . $suma;
echo "</h1>";

?>