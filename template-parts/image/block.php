<?php
/**
 *
 *
 * Full Width Image
 *
 *
 */
$image = get_sub_field('image');
$size = 'large';
$section_id = get_sub_field('section_id');
?>
<div class="page-section main-container" id="<?= $section_id; ?>">
    <div class="grid-x grid-margin-x">
        <div class="cell small-12" data-aos="fade-up" data-aos-duration="1000">

                <img class="" data-interchange="[<?php echo $image['sizes']['featured-small'];?>, small], [<?php echo $image['sizes']['featured-medium'];?>, medium], [<?php echo $image['sizes']['featured-large'];?>, large], [<?php echo $image['sizes']['featured-xlarge'];?>, xlarge]" alt="">

        </div>
    </div>
</div>