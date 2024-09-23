<?php
session_start(); //Creamos una sesion o reanudamos una ya existente mediante una id de sesion proporcionando en la solicitud get o post
if ($_SERVER['REQUEST_METHOD']==='POST'){ //verifica si el formulario fue enviado mediante el metodo POST (si se cumple entramos en la fase de validar y si no se cumple mostraria un error)
    $username = $_POST['username'];
    $password = $_POST['password']; // La variable que se intorducen en los corchetes es el id de los formularios
    if($username==='nombre@cesun.edu.mx' && $password=== '12345'){ //se define la comparacion con el usuario y la contraseña
        $_SESSION['loggedin'] = true; //almacena una variable de sesion que nos indica que el usuario inicio sesion de manera correcta
        header('Location: Tasks_Manager.html'); // redirigir al archivo donde tenemos el administrador de tareas
        exit;
    }else{
        $error = "usuario o contraseña invalidos"; // nos arroja el mensaje si hay un error
    }
}//else{
  //  $error="No se obtuvieron datos del servidor";
//}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Mi Enciclopedia</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Mi Enciclopedia</h1>
        </header>
        
        <div class="login-box">
            <h2>Iniciar Sesión</h2>
            
            <?php if (isset($error)): //iniciar sesion y redirigir a Tasks_Manager.html ?>
            <div class=""alert alert-warning"><?php echo $error; ?></div>
            <?php endif; ?>            
            <form action="login.php" method="POST">
                
                <div class="input-group">
                    <label for="username">Nombre de usuario:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Entrar</button>
            </form>
        </div>

        <footer>
            <p>&copy; 2024 Mi Enciclopedia. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>
</html>