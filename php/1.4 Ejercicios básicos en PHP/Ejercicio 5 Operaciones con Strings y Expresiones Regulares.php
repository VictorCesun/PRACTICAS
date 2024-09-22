<?php
$correo = "test_user@example.com";

echo "Interpolación:";
echo "El correo electrónico es: $correo<br>";

$patron = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

if (preg_match($patron, $correo)) {
    echo "El correo es válido<br>";
} else {
    echo "El correo no es válido<br>";
}

$nombre_usuario = substr($correo, 0, strpos($correo, '@'));
echo "El nombre de usuario es: $nombre_usuario<br>";
?>