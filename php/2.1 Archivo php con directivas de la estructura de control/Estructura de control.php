<?php
// =================== Listas y Arreglos ===================
// Definir un arreglo de frutas
$frutas = ["Manzana", "Banana", "Naranja", "Pera", "Mango"];

// Mostrar cada fruta usando foreach
echo "Lista de frutas (foreach):<br>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
echo "<br>";

// =================== Pilas (Stacks) ===================
// Crear una pila
$pila = [];

// Apilar elementos
array_push($pila, "Manzana");
array_push($pila, "Banana");
array_push($pila, "Naranja");

// Desapilar el último elemento
$fruta = array_pop($pila);
echo "Elemento desapilado de la pila: " . $fruta . "<br>";

// Mostrar la pila restante
echo "Pila restante:<br>";
print_r($pila);
echo "<br><br>";

// =================== Colas (Queues) ===================
// Crear una cola
$cola = [];

// Agregar elementos a la cola
array_push($cola, "Manzana");
array_push($cola, "Banana");
array_push($cola, "Naranja");

// Eliminar el primer elemento de la cola
$fruta = array_shift($cola);
echo "Elemento removido de la cola: " . $fruta . "<br>";

// Mostrar la cola restante
echo "Cola restante:<br>";
print_r($cola);
echo "<br><br>";

// =================== Hashes (Arreglos Asociativos) ===================
// Crear un arreglo asociativo (hash)
$personas = [
    "Juan" => 25,
    "Ana" => 30,
    "Luis" => 35
];

// Mostrar cada nombre y edad
echo "Personas y edades (hash):<br>";
foreach ($personas as $nombre => $edad) {
    echo $nombre . " tiene " . $edad . " años.<br>";
}
echo "<br>";

// =================== Iteración de Colecciones de Datos ===================
// Crear un arreglo de números
$numeros = [1, 2, 3, 4, 5];

// Usar foreach para mostrar cada número
echo "Números (foreach):<br>";
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

// Usar for para sumar los números
$suma = 0;
for ($i = 0; $i < count($numeros); $i++) {
    $suma += $numeros[$i];
}
echo "La suma de los números es: " . $suma . "<br><br>";

// =================== Controles de Flujo ===================
// Verificar si un número es positivo, negativo o cero
$numero = -5;
if ($numero > 0) {
    echo "El número es positivo.<br>";
} elseif ($numero < 0) {
    echo "El número es negativo.<br>";
} else {
    echo "El número es cero.<br>";
}

echo "<br>";

// Usar switch para determinar el día de la semana
$dia = 3;
switch ($dia) {
    case 1:
        echo "Lunes<br>";
        break;
    case 2:
        echo "Martes<br>";
        break;
    case 3:
        echo "Miércoles<br>";
        break;
    case 4:
        echo "Jueves<br>";
        break;
    case 5:
        echo "Viernes<br>";
        break;
    default:
        echo "Fin de semana<br>";
}
echo "<br>";

// =================== Operador Ternario ===================
// Verificar si es mayor de edad
$edad = 20;
echo ($edad >= 18) ? "Es mayor de edad.<br>" : "Es menor de edad.<br>";
echo "<br>";

// =================== Bucle do-while y while ===================
// Bucle do-while (imprimir números del 1 al 5)
$i = 1;
echo "Números (do-while):<br>";
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 5);
echo "<br>";

// Bucle while (contar hacia atrás desde 5 hasta 1)
$j = 5;
echo "Cuenta regresiva (while):<br>";
while ($j >= 1) {
    echo $j . "<br>";
    $j--;
}
?>
