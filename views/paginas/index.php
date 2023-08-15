<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>

    <?php include 'iconos.php'; ?>

</main>

<section class="seccion contenedor">
    <h2>Casas y Depas en Venta</h2>

    <?php
        require 'listado.php';
    ?>

    <div class="alinear-derecha">
        <a href="/propiedades" class="btn-rosa">Ver todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="/contacto" class="btn-azul">Contáctanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section>
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="/entrada1">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>05/06/2023</span> por: <span>Admin</span> </p>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="/entrada2">
                    <h4>Construye una alberca en tu hogar</h4>
                    <p>Escrito el: <span>05/06/2023</span> por: <span>Admin</span> </p>

                    <p>
                        Consejos para construir una alberca en el patio de tu casa con los mejores materiales y ahorrando dinero
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales"> 
        <h3>Testimoniales</h3>

        <div class="testimonial">
            <blockquote>
                El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
            </blockquote>

            <p>-José Francisco Villa</p>
        </div>
    </section>
</div>