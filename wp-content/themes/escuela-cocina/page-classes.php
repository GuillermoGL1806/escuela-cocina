<?php
/* 
** Template Name: Class list
*/

get_header();
while(have_posts()): the_post();
 $subtitle = get_post_meta( get_the_ID(), 'edc_class_class_subtitle', true);
?>
<div id="topDescription" class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <blockquote class="text-center pl-3 subtitle">
                <?php the_content(); ?>
            </blockquote>
        </div>
        <!-- col-md-8 -->
    </div>
    <!-- row -->
</div>
<!-- container topDescription -->

<section class="classes mt-5 py-5">
    <h1 class="divider text-center mb-3"><?php echo esc_html($subtitle);?></h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                    <img src="img/clase1.jpg" alt="clase1" class="card-img-top" />
                    <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                        <p class="m-0">20/Mayo/2020 18:00 hrs</p>
                        <span class="badge badge-secondary p-2">$300</span>
                    </div>
                    <!-- card-meta -->
                    <div class="card-body">
                        <h3 class="card-title">Comida Italiana para principiantes</h3>
                        <p class="card-subtitle mb-2">
                            Aprende las bases de la comida italiana con este curso
                        </p>
                        <p class="card-ext">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                            ex quis quasi veritatis officia, sed consectetur ea, alias
                            laboriosam.
                        </p>
                        <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más información</a>
                    </div>
                </div>
                <!-- card -->
            </div>
            <!-- grid col-md-6-->
            <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                    <img src="img/clase2.jpg" alt="clase2" class="card-img-top" />
                    <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                        <p class="m-0">20/Mayo/2020 18:00 hrs</p>
                        <span class="badge badge-secondary p-2">$300</span>
                    </div>
                    <!-- card-meta -->
                    <div class="card-body">
                        <h3 class="card-title">Comida Italiana para principiantes</h3>
                        <p class="card-subtitle mb-2">
                            Aprende las bases de la comida italiana con este curso
                        </p>
                        <p class="card-ext">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                            ex quis quasi veritatis officia, sed consectetur ea, alias
                            laboriosam.
                        </p>
                        <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más información</a>
                    </div>
                </div>
                <!-- card -->
            </div>
            <!-- grid col-md-6-->
            <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                    <img src="img/clase3.jpg" alt="clase3" class="card-img-top" />
                    <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                        <p class="m-0">20/Mayo/2020 18:00 hrs</p>
                        <span class="badge badge-secondary p-2">$300</span>
                    </div>
                    <!-- card-meta -->
                    <div class="card-body">
                        <h3 class="card-title">Comida Italiana para principiantes</h3>
                        <p class="card-subtitle mb-2">
                            Aprende las bases de la comida italiana con este curso
                        </p>
                        <p class="card-ext">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                            ex quis quasi veritatis officia, sed consectetur ea, alias
                            laboriosam.
                        </p>
                        <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más información</a>
                    </div>
                </div>
                <!-- card -->
            </div>
            <!-- grid col-md-6-->
            <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                    <img src="img/clase4.jpg" alt="clase4" class="card-img-top" />
                    <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                        <p class="m-0">20/Mayo/2020 18:00 hrs</p>
                        <span class="badge badge-secondary p-2">$300</span>
                    </div>
                    <!-- card-meta -->
                    <div class="card-body">
                        <h3 class="card-title">Comida Italiana para principiantes</h3>
                        <p class="card-subtitle mb-2">
                            Aprende las bases de la comida italiana con este curso
                        </p>
                        <p class="card-ext">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                            ex quis quasi veritatis officia, sed consectetur ea, alias
                            laboriosam.
                        </p>
                        <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más información</a>
                    </div>
                </div>
                <!-- card -->
            </div>
            <!-- grid col-md-6-->
            <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                    <img src="img/clase5.jpg" alt="clase5" class="card-img-top" />
                    <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                        <p class="m-0">20/Mayo/2020 18:00 hrs</p>
                        <span class="badge badge-secondary p-2">$300</span>
                    </div>
                    <!-- card-meta -->
                    <div class="card-body">
                        <h3 class="card-title">Comida Italiana para principiantes</h3>
                        <p class="card-subtitle mb-2">
                            Aprende las bases de la comida italiana con este curso
                        </p>
                        <p class="card-ext">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                            ex quis quasi veritatis officia, sed consectetur ea, alias
                            laboriosam.
                        </p>
                        <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más información</a>
                    </div>
                </div>
                <!-- card -->
            </div>
            <!-- grid col-md-6-->
            <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                    <img src="img/clase6.jpg" alt="clase6" class="card-img-top" />
                    <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                        <p class="m-0">20/Mayo/2020 18:00 hrs</p>
                        <span class="badge badge-secondary p-2">$300</span>
                    </div>
                    <!-- card-meta -->
                    <div class="card-body">
                        <h3 class="card-title">Comida Italiana para principiantes</h3>
                        <p class="card-subtitle mb-2">
                            Aprende las bases de la comida italiana con este curso
                        </p>
                        <p class="card-ext">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                            ex quis quasi veritatis officia, sed consectetur ea, alias
                            laboriosam.
                        </p>
                        <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más información</a>
                    </div>
                </div>
                <!-- card -->
            </div>
            <!-- grid col-md-6-->
        </div>
        <!-- row -->
    </div>
    <!-- container classes -->
</section>
<!-- section classes -->
<?php
endwhile;
get_footer();