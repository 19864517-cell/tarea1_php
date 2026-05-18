<?php
$nume1 = $_POST ["nume1"];
$nume2 = $_POST ["nume2"];

echo "<h1>";

if($nume1 < $nume2){
    echo "el numero menor es: " . $nume1;
    }

    elseif($nume2 < $nume1){
        echo "el numero menor es: " . $nume2;
       }

       else{
        echo "los numeros son iguales";

        }

        ?>