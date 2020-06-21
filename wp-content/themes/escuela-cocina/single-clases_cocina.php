<?php
get_header();
while (have_posts()) : the_post();
    get_template_part('template-parts/content', 'post');
    printf ('<pre>%s</pre>', var_export(get_post_custom( get_the_ID()), true) );
    $classContentList = get_post_meta(get_the_ID(), 'edc_classes_class_content', true);
    $classQuota = get_post_meta(get_the_ID(), 'edc_classes_class_quota', true);
    $classPricing = get_post_meta(get_the_ID(), 'edc_classes_class_pricing', true);
    $classStartTime = get_post_meta(get_the_ID(), 'edc_classes_class_start_time', true);
    $classEndTime = get_post_meta(get_the_ID(), 'edc_classes_class_end_time', true);
    $classPeriodTime = get_post_meta(get_the_ID(), 'edc_classes_class_period_time', true);
    $classStartDate = get_post_meta(get_the_ID(), 'edc_classes_class_start_date', true);
    $classFinishDate = get_post_meta(get_the_ID(), 'edc_classes_class_finish_date', true);
    ?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h2 class="divider text-center my-3">¿Qué incluye?</h2>
            <?php foreach($classContentList as $classContentItem){ ?>
            <ul class="list-group">
                <li class="list-group-item list-group-item-secondary text-light">
                    <?php echo $classContentItem; ?>
                </li>
            </ul>
            <?php }?>

            <h2 class="divider text-center my-3 mt-5">Información Extra</h2>
            <ul class="list-group">
                <li class="list-group-item list-group-item-primary text-light">
                    Costo: $<?php echo $classPricing; ?>
                </li>
                <li class="list-group-item list-group-item-primary text-light">
                    <?php echo $classQuota; ?> cupos disponibles
                </li>
                <li class="list-group-item list-group-item-primary text-light">
                    Horarios <?php echo $classStartTime . " - " . $classEndTime; ?>
                </li>
                <li class="list-group-item list-group-item-primary text-light">
                    <?php echo $classPeriodTime; ?>
                </li>
                <li class="list-group-item list-group-item-primary text-light">
                    Fecha de inicio: <?php echo $classStartDate; ?> Fecha de fin: <?php echo $classFinishDate; ?>
                </li>
            </ul>
        </div>
        <!-- main grid col-md-6 -->

        <div class="col-md-6 text-center">
            <h2 class="divider text-center mt-5 my-md-3">
                Imparte
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-4">
                    <img src="img/instructor.jpg" alt="imagen instructor" class="img-fluid rounded-circle" />
                </div>
                <!-- grid image -->
            </div>
            <!-- row image -->
            <p class="instructor">
                Isabelle De la Torre
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque
                aliquam eos minima iure eum necessitatibus rerum dolorum laudantium
                unde. Eligendi deleniti asperiores optio soluta architecto veritatis
                pariatur rerum laborum fuga.
            </p>
        </div>
        <!-- main grid col-md-6 -->
    </div>
    <!-- row -->
</div>
<!-- container class info -->
<?php
endwhile;
get_footer();