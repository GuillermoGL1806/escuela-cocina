<?php
get_header();
while (have_posts()) : the_post();
    get_template_part('template-parts/content', 'post');
?>
<section class="comments-section py-md-5">
    <div class="container comments">
        <?php
        if(comments_open() || get_comments_number()):
            comments_template();
        else:
            echo "<p class='text-center'>Comentarios deshabilitados</p>";
        endif;
    ?>
    </div>
</section>

<?php
endwhile;
get_footer();