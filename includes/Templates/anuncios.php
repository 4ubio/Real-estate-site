<?php

    //iMPORTAR LA BASE DE DATOS
    require __DIR__ . '/../config/database.php';
    $db = conectardb();

    //Consultar
    $query = "SELECT * FROM propiedades LIMIT ${limite}";

    //obtener resultados
    $resultado = mysqli_query($db, $query);


?>

<div class="contenedor-anuncios">

    <?php while($propiedad = mysqli_fetch_assoc($resultado)) : ?>
        
    <div class="anuncio">
        
        <img src="/imagenes/<?php echo $propiedad['imagen'] ?>" alt="anuncio">


        <div class="contenido-anuncio">
            <h3><?php echo $propiedad['titulo']; ?></h3>
            <p><?php echo $propiedad['descripcion']; ?></p>
            <p class="precio">$<?php echo $propiedad['precio']; ?></p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono_wc" loading="lazy">
                    <p><?php echo $propiedad['wc']; ?></p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento" loading="lazy">
                    <p><?php echo $propiedad['estacionamiento']; ?></p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono_habitaciones" loading="lazy">
                    <p><?php echo $propiedad['habitaciones']; ?></p>
                </li>
            </ul>

            <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton boton-amarillo-block">Ver propiedad</a>
        </div>
    </div>

    <?php endwhile; ?>
</div>

<?php
    mysqli_close($db);
?>