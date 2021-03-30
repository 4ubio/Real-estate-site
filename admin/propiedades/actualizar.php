<?php 

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Locatiob: /admin');
    }

    //Importar la conexion

    require '../../includes/config/database.php';
    $db = conectardb();

    //Obtener los datos de la propiedad
    $consulta = "SELECT * FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db, $consulta);
    $propiedad = mysqli_fetch_assoc($resultado);

    //consultar para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    //Arreglo con mensajes de errores
    $errores = [];

    $titulo = $propiedad['titulo'];
    $precio = $propiedad['precio'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $wc = $propiedad['wc'];
    $estacionamiento = $propiedad['estacionamiento'];
    $vendedorid = $propiedad['venderorid'];
    $imagenPropiedad = $propiedad['imagen'];

    //Ejecutar el codigo despues de que el usuario envia el formulario correctamente
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $titulo = mysqli_real_escape_string( $db, $_POST['titulo'] );
        $precio = mysqli_real_escape_string( $db, $_POST['precio'] );
        $descripcion = mysqli_real_escape_string( $db, $_POST['descripcion'] );
        $habitaciones = mysqli_real_escape_string( $db, $_POST['habitaciones'] );
        $wc = mysqli_real_escape_string( $db, $_POST['wc'] );
        $estacionamiento = mysqli_real_escape_string( $db, $_POST['estacionamiento'] );
        $vendedorid = $_POST['vendedor'];

        //Asignar files hacia una variable
        $imagen = $_FILES['imagen'];

        if(!$titulo) {
            $errores[] = "Debes añadir un titulo";
        }

        if(!$precio) {
            $errores[] = "El precio es obligatorio";
        }

        if(strlen($descripcion) < 50) {
            $errores[] = "La descripcion es obligatoria y debe tener mas de 50 caracteres";
        }

        if(!$habitaciones) {
            $errores[] = "Por favor, agrega un número de habitaciones";
        }

        if(!$wc) {
            $errores[] = "Por favor, agrega un número de baños";
        }

        if(!$estacionamiento) {
            $errores[] = "Por favor, agrega un número de estacionamientos";
        }

        if(!$vendedorid) {
            $errores[] = "Elige un vendedor";
        }

        if ($imagen['size'] > 1000 * 1000) {
            $errores[] = "Sube una imagen mas ligera";
        }

        //Revisar que el arreglo de errores este vacio

        if(empty($errores)){

            //inserta en la base de datos
            $query = "UPDATE propiedades SET titulo = '${titulo}',
                    precio = '${precio}',
                    descripcion = '${descripcion}',
                    habitaciones = ${habitaciones},
                    wc = ${wc},
                    estacionamiento = ${estacionamiento},
                    venderorid = ${vendedorid} WHERE id = ${id}";

            $resultado = mysqli_query($db, $query);

            if ($resultado) {
                //Redireccionar

                header("Location: /admin?resultado=2");
            }
        }
    }

    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor">
        <h1>Actualizar</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion general</legend>

                <label for="titulo">Titulo</label>
                <input name="titulo" type="text" id='titulo' placeholder="Titulo de la propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio</label>
                <input name="precio" type="number" id='precio' placeholder="Precio de la propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen</label>
                <input name = "imagen" type="file" id='imagen' accept="image/jpeg, image/png">

                <img src="/imagenes/<?php echo $imagenPropiedad; ?>" class="imagen-small">

                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id='descripcion'><?php echo $descripcion; ?></textarea>
            </fieldset>
            
            <fieldset>
                <legend>Informacion de la propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input name="habitaciones" type="number" id='habitaciones' placeholder="Ej. 3" min="1" value="<?php echo $habitaciones; ?>">

                <label for="wc">Baños</label>
                <input name="wc" type="number" id='wc' placeholder="Ej. 3" min="1" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento</label>
                <input name="estacionamiento" type="number" id='estacionamiento' placeholder="Ej. 3" min="1" value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="">-- Seleccione --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                        <option <?php echo $vendedorid === $vendedor['id'] ? 'selected' : ''; ?> value= "<?php echo $vendedor['id']; ?>" > <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?> </option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Actualizar propiedad" class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>