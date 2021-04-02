<?php 

    require '../includes/funciones.php';
    $auth = estaAutenticado();

    if (!$auth) {
        header('Location: /');
    }

    //Importar la conexion

    require '../includes/config/database.php';
    $db = conectardb();

    //Escribir el query
    $query = "SELECT * FROM propiedades";

    $resultadoConsulta = mysqli_query($db, $query);

    //Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id) {
            //elimina el archivo
            $query = "SELECT imagen FROM propiedades WHERE id = ${id}";
 
            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);

            unlink('../imagenes/' . $propiedad['imagen']);

            //Elimina la propiedad
            $query = "DELETE FROM propiedades WHERE id = ${id}";

            $resultado = mysqli_query($db, $query);

            if ($resultado) {
                header('location: /admin?resultado=3');
            }
        }
    }

    incluirTemplate('header');
?>

    <main class="contenedor">
        <h1>Administrador de bienes raices</h1>

        <?php if(intval( $resultado) === 1) : ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php elseif(intval( $resultado) === 2) : ?>
            <p class="alerta exito">Anuncio actualizado correctamente</p>
        <?php elseif(intval( $resultado) === 3) : ?>
            <p class="alerta exito">Anuncio eliminado correctamente</p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)) :  ?>

                <tr>
                    <td> <?php echo $propiedad['id'] ?> </td>
                    <td> <?php echo $propiedad['titulo'] ?> </td>
                    <td>
                        <img src="/imagenes/<?php echo $propiedad['imagen'] ?>" class="imagen__tabla" alt="">
                    </td>
                    <td>$ <?php echo $propiedad['precio'] ?> </td>
                    <td>

                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                            <input type="submit" value="Eliminar" class="boton-rojo-block">
                        </form>
                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>

                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php 
    mysqli_close($db);

    incluirTemplate('footer');
?>