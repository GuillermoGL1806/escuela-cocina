<?php
/* Query to clases_cocina post type*/
function edc_query_classes($numberOfClasses = -1){
    $args = array(
        'post_type' => 'clases_cocina',
        'posts_per_page' => $numberOfClasses,
    );

    $classes = new WP_Query($args);

    while($classes->have_posts()): $classes->the_post();
    /* printf ('<pre>%s</pre>', var_export(get_post_custom( get_the_ID()), true) ); */
    $startDate = get_post_meta( get_the_ID() ,'edc_classes_class_start_date' , true);
    $startTime = get_post_meta( get_the_ID() ,'edc_classes_class_end_time' , true);
    $pricing = get_post_meta( get_the_ID() ,'edc_classes_class_pricing' , true);
    $subtitle = get_post_meta( get_the_ID() ,'edc_classes_class_subtittle' , true);

    ?>
<div class="col-md-6 col-lg-4">
    <div class="card mb-4">
        <?php the_post_thumbnail( 'mediano', array('class' => 'card-img-top') ); ?>
        <!-- WP way to insert bootstrap img -->
        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
            <div>
                <p class="m-0">Fecha de inicio: <?php echo $startDate; ?></p>
                <p class="m-0">Hora de inicio: <?php echo $startTime; ?></p>
            </div>
            <span class="badge badge-secondary p-2">$<?php echo $pricing; ?></span>
        </div>
        <!-- card-meta -->
        <div class="card-body">
            <h3 class="card-title"><?php the_title(); ?></h3>
            <p class="card-subtitle mb-2">
                <?php echo $subtitle; ?>
            </p>
            <p class="card-ext">
                <?php echo wp_trim_words( get_the_content(), 20, $more)?>
            </p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary d-block d-md-inline">Más información</a>
        </div>
    </div>
    <!-- card -->
</div>
<!-- grid col-md-6-->


<?php    
endwhile; wp_reset_postdata(); /* Use this function to restore the context of the template tags from a secondary query loop back to the main query loop. */
}