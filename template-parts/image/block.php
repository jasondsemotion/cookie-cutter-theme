<?php
/**
 *
 *
 * Full Width Image
 *
 *
 */
$image = get_sub_field('image');
$size = 'full';
$section_id = get_sub_field('section_id');
?>
<div class="page-section main-container" id="<?= $section_id; ?>">
    <div class="grid-x grid-margin-x">
        <div class="cell small-12" data-aos="fade-up" data-aos-duration="1000">
            <?= wp_get_attachment_image( $image, $size ); ?>
        </div>
    </div>
</div>