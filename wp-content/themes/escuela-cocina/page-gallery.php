<?php
/* 
** Template Name: Gallery
*/
get_header();

while (have_posts()) : the_post();

get_template_part('template-parts/content', 'pages');
//printf ('<pre>%s</pre>', var_export(get_post_custom( get_the_ID()), true) );
$images = get_post_meta(get_the_ID(), 'edc_gallery_gallery' , true);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- card-columns make the content ordered from top to bottom and left to right with column css properties-->
            <div class="card-columns">
                <!-- Loop to read every position of the array and obtain an specific image -->
                <?php foreach($images as $id => $image ){
                    $image = wp_get_attachment_image_url( $id, 'mediano');
                    $image_modal = wp_get_attachment_image_url( $id, 'full');
                ?>
                <div class="card">
                    <a href="#" data-toggle="modal" data-target="#imagen1<?php echo $id; ?>">
                        <img src="<?php echo $image; ?>" alt="clase 1" class="img-fluid" />
                    </a>
                    <div id="imagen1<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <img src="<?php echo $image_modal; ?>" alt="clase 1" class="img-fluid" />
                            </div>
                            <!-- modal-content -->
                        </div>
                        <!-- modal-dialog -->
                    </div>
                    <!-- imagen1 -->
                </div>
                <!-- card -->
                <?php } ?>
            </div>
            <!-- card-columns -->
        </div>
        <!-- col-md-10 -->
    </div>
    <!-- main row -->
</div>
<!-- main container -->

<?php
endwhile;
get_footer();