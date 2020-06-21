<?php
get_header();
while (have_posts()) : the_post();
    get_template_part('template-parts/content', 'post');?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h2 class="divider text-center my-3">¿Qué incluye?</h2>
            <ul class="list-group">
                <li class="list-group-item list-group-item-secondary text-light">
                    Todos los ingredientes
                </li>
                <li class="list-group-item list-group-item-secondary text-light">
                    Mesas de trabajo individuales
                </li>
                <li class="list-group-item list-group-item-secondary text-light">
                    Recetarios
                </li>
                <li class="list-group-item list-group-item-secondary text-light">
                    Reconocimiento por completar el curso
                </li>
            </ul>

            <h2 class="divider text-center my-3 mt-5">Información Extra</h2>
            <ul class="list-group">
                <li class="list-group-item list-group-item-primary text-light">
                    Costo de 300
                </li>
                <li class="list-group-item list-group-item-primary text-light">
                    20 cupos disponibles
                </li>
                <li class="list-group-item list-group-item-primary text-light">
                    Horarios 18:00 - 20:00 horas
                </li>
                <li class="list-group-item list-group-item-primary text-light">
                    Duración 8 semanas / 2 horas cada sábado
                </li>
            </ul>
        </div>
        <!-- main grid col-md-6 -->

        <div class="col-md-6 text-center">
            <h2 class="divider text-center mt-5 my-md-3">
                Imparte
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-4">
                    <img src="img/instructor.jpg" alt="imagen instructor" class="img-fluid rounded-circle" />
                </div>
                <!-- grid image -->
            </div>
            <!-- row image -->
            <p class="instructor">
                Isabelle De la Torre
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque
                aliquam eos minima iure eum necessitatibus rerum dolorum laudantium
                unde. Eligendi deleniti asperiores optio soluta architecto veritatis
                pariatur rerum laborum fuga.
            </p>
        </div>
        <!-- main grid col-md-6 -->
    </div>
    <!-- row -->
</div>
<!-- container class info -->
<?php
endwhile;
get_footer();