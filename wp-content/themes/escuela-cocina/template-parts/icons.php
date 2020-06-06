<?php
    $title = get_post_meta( get_the_ID() , 'edc_group_icon_title', true);/* bring the metabox title */
    $iconsInformation = get_post_meta( get_the_ID() , 'edc_group_icons', true);/* bring the metabox group */
?>

<section class="icon mt-5 container">
    <h2 class="text-center mb-5 divider">
        <?php echo $title; ?>
    </h2>
    <div class="row justify-content-center">
        <?php
        foreach($iconsInformation as $iconInformation){
        ?>
        <div class="col-md-4 text-center information">
            <img src="<?php echo $iconInformation['image_icon']; ?>" alt="<?php echo $iconInformation['title_icon']; ?>"
                class="img-fluid mb-3" />
            <h3><?php echo $iconInformation['title_icon']; ?></h3>
            <p>
                <?php echo $iconInformation['description_icon']; ?>
            </p>
        </div>
        <?php } ?>
    </div>
</section>