<?php 

    require 'includes/config/database.php';
    $db = conectardb();

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (!$email) {
            $errores[] = "El email es obligatorio o no es valido";
        }

        if (!$password) {
            $errores [] = "El password es opbligatorio o no es valido";  
        }

        if (empty($errores)) {
            //Resvisar si el ususario existe

            $query = "SELECT * FROM usuarios WHERE email = '${email}'";
            $resultado = mysqli_query($db, $query);

            if($resultado -> num_rows) {
                //Revisar la contraseña

                $usuario = mysqli_fetch_assoc($resultado);

                $auth = password_verify($password, $usuario['password']);

                if ($auth) {
                    session_start();

                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('location: /admin');
                } else {
                    $errores[] = "El password es incorrecto";
                }

            } else {
                $errores[] = "El email no existe"; 
            }
        }

    }

    //Incluye el header
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar sesion</h1>

        <?php foreach($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario" novalidate>
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input name="email" type="email" placeholder="Tu Email" id="email">

                <label for="password">Password</label>
                <input name="password" type="password" placeholder="Tu password" id="password">

            </fieldset>

            <input type="submit" value="Iniciar sesión" class="boton boton-verde">
        </form>
    </main>

    <?php 
        incluirTemplate('footer');
    ?>