<?php
   require 'includes/funciones.php';
incluirTemplate('header');

?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
            <p class="informacion-meta">Escrito el: <span>20/11/2022</span>     por: <span>Admin</span></p>


        </picture>

        <div class="resumen-propiedad">
            
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
  incluirTemplate('footer');
?>