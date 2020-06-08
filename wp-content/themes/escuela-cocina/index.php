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
                        <div class="post-meta pt-2 pt-md-0">
                            <p class="m-0">
                                Escrito el: <span>
                                    <?php the_time(get_option('date_format')); /* insert the date in all posts */?>
                                </span>por
                                <a
                                    href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename') ); ?>"><?php the_author(); ?></a>
                            </p>
                        </div>
                        <!-- post-meta -->
                        <p>
                            <?php the_excerpt();?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary text-light">Ver entrada</a>
                    </div>
                    <!-- post-content -->
                </div>
                <!-- col-md-8 -->
            </div>
            <!-- row postPreview -->
            <?php endwhile; ?>
        </main>

        <?php get_sidebar(); ?>
    </div>
    <!-- main row -->
</div>
<!-- main container -->
<?php get_footer(); ?>