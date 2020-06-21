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
            <?php edc_query_classes(); ?>
        </div>
        <!-- row -->
    </div>
    <!-- container classes -->
</section>
<!-- section classes -->
<?php
endwhile;
get_footer();