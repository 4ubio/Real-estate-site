<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor">
        <h1>Conoce mas sobre nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="blog" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

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
        </div>
    </main>

    <section class="contenedor">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono_seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, libero vitae tenetur unde quisquam consectetur? Commodi tempore, perferendis minima porro cumque neque provident. Labore praesentium nulla autem minima et. Voluptate?</p>
            </div>
            
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono_precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, libero vitae tenetur unde quisquam consectetur? Commodi tempore, perferendis minima porro cumque neque provident. Labore praesentium nulla autem minima et. Voluptate?</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono_seguridad" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, libero vitae tenetur unde quisquam consectetur? Commodi tempore, perferendis minima porro cumque neque provident. Labore praesentium nulla autem minima et. Voluptate?</p>
            </div>
        </div>
    </section>

    <?php 
        incluirTemplate('footer');
    ?>