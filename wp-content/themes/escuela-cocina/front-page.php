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
    <div class="row top-image image">
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
    <!-- main top row -->
    <div class="row bottom-image image">
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
    <!-- main bottom row -->
</div>
<!-- main container-fluid -->



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

<?php
  endwhile;
endif;
get_footer();