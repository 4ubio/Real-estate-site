<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="anuncio">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono_wc" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono_habitaciones" loading="lazy">
                    <p>4</p>
                </li>
            </ul>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi rem impedit adipisci porro hic! Voluptates voluptatibus quasi quibusdam, aliquam dignissimos nam maxime eum aperiam accusamus, magnam, laudantium placeat qui quidem.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam corporis ipsam blanditiis est odio ea nobis quo consequatur suscipit repellendus, iusto distinctio aut ullam officia similique corrupti, id doloribus repudiandae.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, ab assumenda, cum animi dolorem itaque similique non qui fuga aliquam iusto tempora deserunt. Eum mollitia atque ducimus consequatur, libero molestias?
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis accusantium quo suscipit qui, expedita consequuntur aut ipsum corrupti vitae? Nihil labore ipsa quisquam nobis in vero consectetur illum perferendis quas?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt nulla sunt vel recusandae. Suscipit a animi praesentium iste repellendus atque inventore! Delectus tempora ullam architecto non molestiae, quaerat nihil sequi?
            </p>

        </div>
    </main>

    <?php 
        incluirTemplate('footer');
    ?>