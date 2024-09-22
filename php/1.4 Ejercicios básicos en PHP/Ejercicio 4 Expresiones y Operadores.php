<?php
$num1 = 15;
$num2 = 4;
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;
$modulo = $num1 % $num2;
echo "Resultados de las operaciones aritméticas:";
echo "Suma: $num1 + $num2 = $suma<br>";
echo "Resta: $num1 - $num2 = $resta<br>";
echo "Multiplicación: $num1 * $num2 = $multiplicacion<br>";
echo "División: $num1 / $num2 = $division<br>";
echo "Módulo: $num1 % $num2 = $modulo<br>";


echo "Resultados de las comparaciones:";
echo "¿$num1 es mayor que $num2? " . ($num1 > $num2 ? 'true' : 'false') . "<br>";
echo "¿$num1 es menor que $num2? " . ($num1 < $num2 ? 'true' : 'false') . "<br>";
echo "¿$num1 es mayor o igual que $num2? " . ($num1 >= $num2 ? 'true' : 'false') . "<br>";
echo "¿$num1 es menor o igual que $num2? " . ($num1 <= $num2 ? 'true' : 'false') . "<br>";
echo "¿$num1 es igual a $num2? " . ($num1 == $num2 ? 'true' : 'false') . "<br>";
echo "¿$num1 es diferente de $num2? " . ($num1 != $num2 ? 'true' : 'false') . "<br>";


echo "Resultados de las expresiones lógicas:";
echo "¿($num1 > 10) y ($num2 < 5)? " . (($num1 > 10 && $num2 < 5) ? 'true' : 'false') . "<br>";
echo "¿($num1 < 20) o ($num2 > 5)? " . (($num1 < 20 || $num2 > 5) ? 'true' : 'false') . "<br>";
echo "¿No ($num1 < 20)? " . (!($num1 < 20) ? 'true' : 'false') . "<br>";

?>