<?php printf ('<pre>%s</pre>', var_export(get_post_custom( get_the_ID()), true) );
    $title = get_post_meta( get_the_ID() , 'edc_group_icon_title', true);/* bring the metabox title */
    
?>

<section class="us mt-5 container">
    <h2 class="text-center mb-5 divider">
        <?php echo $title ?>
    </h2>
    <div class="row">
        <div class="col-md-4 text-center information">
            <img src="img/icono_chef.png" alt="icono chef" class="img-fluid mb-3" />
            <h3>Chef's especialistas</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
        <!-- First col-md-4 -->
        <div class="col-md-4 text-center information">
            <img src="img/icono_vino.png" alt="icono chef" class="img-fluid mb-3" />
            <h3>Incluye todo sobre bebidas</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
        <!-- Second col-md-4 -->
        <div class="col-md-4 text-center information">
            <img src="img/icono_menu.png" alt="icono chef" class="img-fluid mb-3" />
            <h3>Siempre actualizado</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
        <!-- Third col-md-4 -->
    </div>
</section>