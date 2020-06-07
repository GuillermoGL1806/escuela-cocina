<?php get_header(); ?>
<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <blockquote class="text-center pl-3 subtitle">
                Recetas, Recomendaciones ty Tips para Chef's Profesionales o Novatos
            </blockquote>
        </div>
        <!-- col-md-8 -->
    </div>
    <!-- row -->
</div>

<div class="container">
    <div class="row">
        <main class="col-lg-9 col-md-8">
            <h1 class="divider text-center mb-3">
                Nuestro Blog
            </h1>

            <?php while(have_posts()): the_post();?>
            <div class="row mb-4 post-preview">
                <div class="col-md-4">
                    <?php the_post_thumbnail('mediano', array('class' => 'img-fluid')); ?>
                </div>
                <!-- col-md-4 image -->
                <div class="col-md-8">
                    <div class="post-content pt-4 pt-md-0">
                        <a href="entrada.html">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <div class="meta pt-2 pt-md-0">
                            <p class="m-0">
                                Escrito el: <span> 20 / 12 /20 </span>por <a href="#"><?php the_author(); ?></a>
                            </p>
                        </div>
                        <!-- meta data post-content -->
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium minus ducimus illum
                            nemo sapiente sequi voluptatum porro quam unde dolor aliquid ipsa doloribus magni, omnis
                            corporis modi vitae ad neque!
                        </p>
                        <a href="entrada.html" class="btn btn-primary text-light">Ver entrada</a>
                    </div>
                    <!-- post-content -->
                </div>
                <!-- col-md-8 -->
            </div>
            <!-- row postPreview -->
            <?php endwhile; ?>
        </main>

        <aside class="col-lg-3 col-md-4 bg-primary p-4">
            <div class="nextCourses">
                <h2 class="text-center text-light divider inverse">
                    Próximos cursos
                </h2>
                <div class="card mb-4">
                    <img src="img/clase1.jpg" alt="imagen de curso" class="img-fluid" />
                    <div class="card-body">
                        <h3 class="card-title">
                            Comida italiana para principiantes
                        </h3>
                        <p class="card-subtitle m-0">
                            Aprende las bases de la comida italiana con este curso
                        </p>
                    </div>
                    <!-- card-body -->
                    <div class="card-footer">
                        <a href="#">Más información</a>
                    </div>
                    <!-- card-footer -->
                </div>
                <!-- main card -->
            </div>
            <div class="card mb-4">
                <img src="img/clase1.jpg" alt="imagen de curso" class="img-fluid" />
                <div class="card-body">
                    <h3 class="card-title">
                        Comida italiana para principiantes
                    </h3>
                    <p class="card-subtitle m-0">
                        Aprende las bases de la comida italiana con este curso
                    </p>
                </div>
                <!-- card-body -->
                <div class="card-footer">
                    <a href="#">Más información</a>
                </div>
                <!-- card-footer -->
            </div>
            <!-- main card -->
            <div class="card mb-4">
                <img src="img/clase1.jpg" alt="imagen de curso" class="img-fluid" />
                <div class="card-body">
                    <h3 class="card-title">
                        Comida italiana para principiantes
                    </h3>
                    <p class="card-subtitle m-0">
                        Aprende las bases de la comida italiana con este curso
                    </p>
                </div>
                <!-- card-body -->
                <div class="card-footer">
                    <a href="#">Más información</a>
                </div>
                <!-- card-footer -->
            </div>
            <!-- main card -->
            <div class="lastPosts">
                <h2 class="text-center text-light">Últimas entradas</h2>
                <ul class="list-unstyled mt-4 text-center">
                    <li>
                        <a href="#">Título de entrada</a>
                    </li>
                    <li>
                        <a href="#">Título de entrada</a>
                    </li>
                    <li>
                        <a href="#">Título de entrada</a>
                    </li>
                    <li>
                        <a href="#">Título de entrada</a>
                    </li>
                </ul>
            </div>
            <!-- lastPosts -->
        </aside>
        <!-- next courses -->
    </div>
    <!-- main row -->
</div>
<!-- main container -->
<?php get_footer(); ?>