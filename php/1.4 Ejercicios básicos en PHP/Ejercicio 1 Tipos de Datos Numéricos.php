<?php

$entero = 5;
$float = 12.35;
$suma = $entero+ $float;
$dentero = $entero*10;
$dfloat = $float*10;

//Asigna valores a ambas variables y muestra su tipo de dato utilizando la función `gettype()`.
echo gettype($entero). "\n";
echo gettype($float) . "\n";

//Realiza una operación matemática simple (suma, resta, multiplicación o división) entre las dos variables y muestra el resultado.
echo("Suma: $suma") . "\n";

//Muestra la diferencia entre un número entero y flotante al multiplicarlos por 10 cada uno.
echo("Entero por 10: $dentero") . "\n";
echo("Flotante por 10: $dfloat");

?>