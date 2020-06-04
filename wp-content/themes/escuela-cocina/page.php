<?php
get_header();

while (have_posts()) : the_post();
?>

    <div class="container">
      <div class="row">
        <div class="col-12 outstandingImage us-bg"></div>
      </div>
    </div>
    <main class="container">
      <div class="row justify-content-center">
        <div id="Us" class="col-md-8 py-3 px-5 us-content bg-light shadow">
          <h2 class="text-center my-5 divider"><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
        <!-- Us -->
      </div>
      <!-- row -->
    </main>
<?php
endwhile;
get_footer();