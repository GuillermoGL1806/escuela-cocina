<?php
        $html = edc_featured_image( get_the_ID() );
        /* if an image exists in the page
        ** $html [0] returns the html
        ** $html [1] returns true
        */
        echo $html[0];
?>
<main class="container">
    <div class="row justify-content-center">
        <!-- ternary operation to format bootstrap css -->
        <div id="Content"
            class=" bg-light <?php echo $html[1] ? 'col-md-8 py-3 px-5 page-content shadow' : 'col-md-12'; ?>">
            <h2 class="text-center my-5 divider"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
        <!-- Content -->
    </div>
    <!-- row -->
</main>