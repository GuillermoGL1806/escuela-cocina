<footer class="footer p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php
                $args = array(
                    'menu_class' => 'nav text-uppercase d-flex flex-column flex-md-row text-center text-md-left',
                    'theme_location' => 'main_menu'
                );
                wp_nav_menu($args)
            ?>
            </div>
            <!-- col-md-8 -->
            <div class="col-md-5">
                <p class="text-center text-md-right mt-4 mt-md-0 copyright">
                    Todos los derechos reservados <?php echo esc_html__( get_bloginfo($show, $filter) );?>
                    <?php echo date('Y'); ?>
                </p>
            </div>
            <!-- col-md-4 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</footer>
<?php wp_footer(); ?>
</body>

</html>