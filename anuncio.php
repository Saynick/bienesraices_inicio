<?php
include './includes/templates/header.php';

?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">

        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono icono 
                    estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>

            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sapiente magnam esse tenetur ea commodi
                vero fuga ad maxime vitae. Dignissimos fuga consequuntur libero quo incidunt deleniti perspiciatis
                nulla. Similique!</p>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae autem itaque nostrum quisquam vel
                quidem ea ab asperiores saepe dolores laborum sed, maxime at, qui neque recusandae corporis perferendis
                quis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis pariatur, expedita enim
                dolore obcaecati, veritatis esse sapiente recusandae qui vero impedit, provident corporis ad deleniti
                repellat! Numquam possimus harum eius!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo iusto eligendi atque, dolores similique
                blanditiis quam, non in, commodi recusandae illum consequatur unde voluptates! Eos dolorem aspernatur
                atque odit iusto?</p>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati accusamus quae odit doloremque omnis
                nemo, debitis, deleniti magnam officia aliquam quam quibusdam officiis est sapiente alias. Aspernatur
                animi magni eaque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus eum, dolorem
                eligendi tenetur tempora quae voluptate enim fugiat reiciendis id laboriosam iste quam incidunt quidem
                eos, aliquam, soluta consectetur beatae!</p>
        </div>
    </main>

    <?php

include './includes/templates/footer.php';

?>