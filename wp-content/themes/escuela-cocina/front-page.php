<?php get_header(); 
  if (have_posts() ) :
    while (have_posts()) : the_post();
    /* printf ('<pre>%s</pre>', var_export(get_post_custom( get_the_ID()), true) ); debugging*/
    $textHero1 = get_post_meta( get_the_ID(), 'homepage_top_text_1', true);
    $textHero2 = get_post_meta( get_the_ID(), 'homepage_top_text_2', true);
    $imageHero1 = get_post_meta( get_the_ID(), 'homepage_image_1', true);
    $imageHero2 = get_post_meta( get_the_ID(), 'homepage_image_2', true);
    $bottomText = get_post_meta( get_the_ID(), 'homepage_bottom_text', true);
    $bottomImage = get_post_meta( get_the_ID(), 'homepage_bottom_image', true);
    $contacto = get_page_by_title('Contacto');
?>
<div class="container-fluid main-images">
    <div class="row first-top-image image">
        <div class="col-md-6 bg-primary">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-8 col-md-6">
                    <div class="content text-center text-light py-3">
                        <?php echo $textHero1; ?>
                    </div>
                    <!-- content -->
                </div>
                <!-- content col-sm-8 -->
            </div>
            <!-- content row -->
        </div>
        <!-- col-md-6 -->
        <div class="col-md-6 images-hero" style="background-image: url(<?php echo $imageHero1; ?>)">
        </div>
    </div>
    <!-- main first top row -->
    <div class="row second-top-image image">
        <div class="col-md-6 bg-secondary">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-8 col-md-6">
                    <div class="content text-center py-3">
                        <?php echo $textHero2; ?>
                    </div>
                    <!-- content -->
                </div>
                <!-- content col-sm-8 -->
            </div>
            <!-- content row -->
        </div>
        <!-- col-md-6 -->
        <div class="col-md-6 images-hero" style="background-image: url(<?php echo $imageHero2; ?>)"></div>
    </div>
    <!-- main second top row -->
</div>
<!-- main container-fluid -->

<?php /* create a custom query to get pagename Nosotros and display the content that we want of it */
    $aboutUs = new WP_Query('pagename=nosotros');
    while($aboutUs->have_posts()): $aboutUs->the_post(  );
    get_template_part('template', 'parts/icons');
    endwhile; wp_reset_postdata();
?>
<section class="classes mt-5 py-5">
    <h1 class="divider text-center mb-3">Próximas clases</h1>
    <div class="container">
        <div class="row justify-content-center">
            <?php edc_query_classes(3); ?>
        </div>
        <!-- row classes -->
        <div class="row justify-content-end">
            <div class="col-sm-5 col-md-3">
                <a href="<?php echo get_permalink( get_page_by_title('Clases') ); ?>"
                    class="btn btn-primary d-block">Ver todas las clases</a>
            </div>
        </div>
    </div>
    <!-- container classes -->
</section>
<!-- section classes -->
<div class="school-subject" style="background-image: url(<?php echo $bottomImage ?>)">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="content text-center text-light">
                    <?php echo $bottomText; ?>
                    <a href="<?php echo get_permalink($contacto->ID)?>" class="btn btn-primary text-light">Más
                        información</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- school-subject -->
<?php
  endwhile;
endif;
get_footer();