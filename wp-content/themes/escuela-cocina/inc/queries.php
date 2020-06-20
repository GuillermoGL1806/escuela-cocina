<?php
/* Query to clases_cocina post type*/
function edc_query_classes($numberOfClasses = -1){
    $args = array(
        'post_type' => 'clases_cocina',
        'posts_per_page' => $numberOfClasses,
    );

    $classes = new WP_Query($args);

    while($classes->have_posts()): $classes->the_post();
    printf ('<pre>%s</pre>', var_export(get_post_custom( get_the_ID()), true) );
    ?>
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


<?php    
endwhile; wp_reset_postdata(); /* Use this function to restore the context of the template tags from a secondary query loop back to the main query loop. */
}