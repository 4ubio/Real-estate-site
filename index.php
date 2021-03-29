<?php 
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor">
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
    </main>

    <section class="seccion contenedor">
        <h2>Casas y departamentos en venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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

                    <a href="anuncio.php" class="boton boton-amarillo-block">Ver propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa con acabados de lujo a un excelente precio</p>
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

                    <a href="anuncio.php" class="boton boton-amarillo-block">Ver propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa con alberca, acabados de lujo a un excelente precio</p>
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

                    <a href="anuncio.php" class="boton boton-amarillo-block">Ver propiedad</a>
                </div>
            </div>

        </div>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img src="build/img/blog1.jpg" alt="blog" loading="lazy">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        
                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando tu dinero
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img src="build/img/blog2.jpg" alt="sobre-nosotros" loading="lazy">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        
                        <p>
                            Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y más
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas
                </blockquote>

                <p>- Sebastián Rubio</p>
            </div>
        </section>
    </div>

    <?php 
        incluirTemplate('footer');
    ?>