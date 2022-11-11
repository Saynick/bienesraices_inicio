<?php
   require 'includes/funciones.php';
incluirTemplate('header');

?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eaque quo recusandae consequatur
                    culpa reprehenderit itaque, delectus distinctio debitis quisquam ad, dolorem doloremque iste
                    veritatis incidunt iusto quos quia officia.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis similique reprehenderit eveniet,
                    est consectetur cumque magni architecto aut reiciendis eum. Excepturi illum dolore soluta aliquid
                    exercitationem sunt veritatis quia recusandae!</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, repudiandae quidem. Eius perspiciatis
                    accusamus ducimus eligendi, aliquam, cupiditate doloribus optio sed molestiae corrupti nobis
                    sapiente excepturi adipisci, dolores in praesentium!</p>
            </div>

        </div>

    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum vero iusto consequatur eveniet
                    sapiente esse ex est vitae, soluta consequuntur ea iste neque aspernatur sint pariatur id cupiditate
                    quos ratione.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum vero iusto consequatur eveniet
                    sapiente esse ex est vitae, soluta consequuntur ea iste neque aspernatur sint pariatur id cupiditate
                    quos ratione.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum vero iusto consequatur eveniet
                    sapiente esse ex est vitae, soluta consequuntur ea iste neque aspernatur sint pariatur id cupiditate
                    quos ratione.</p>
            </div>
        </div>


    </section>

<?php
  incluirTemplate('footer');
?>