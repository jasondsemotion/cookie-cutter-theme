<?php
/**
 *
 *
 * Image and Text
 *
 *
 */
$sidespadd = get_sub_field('add_side_padding');
$title = get_sub_field('title');
$content = get_sub_field('content');
$image = get_sub_field('image');
$secondary_image = get_sub_field('secondary_image');
$size = 'full';
$layout = get_sub_field('layout');
$padding = get_sub_field('padding_on_text_content');
$background = get_sub_field('background_on_text_content');
$id = get_sub_field('section_id');
$widths = get_sub_field('widths');
$fulltitle = '<' . $title_type . ' class="title">' . $title . '</'. $title_type . '>';
$width_one = '';
$width_two = '';

// Declare Widths
if($widths == 'thirty-seventy') {
    $width_one = 'small-12 medium-12 large-3';
    $width_two = 'small-12 medium-12 large-9';
}
if($widths == 'forty-sixty') {
    $width_one = 'small-12 medium-12 large-4';
    $width_two = 'small-12 medium-12 large-8';
}
if($widths == 'fifty-fifty') {
    $width_one = 'small-12 medium-12 large-6';
    $width_two = 'small-12 medium-12 large-6';
}
if($widths == 'sixty-forty') {
    $width_one = 'small-12 medium-12 large-8';
    $width_two = 'small-12 medium-12 large-4';
}
if($widths == 'seventy-thirty') {
    $width_one = 'small-12 medium-12 large-9';
    $width_two = 'small-12 medium-12 large-3';
}
?>




<section class="page-section <?php if( get_sub_field('add_side_padding') ): ?>side-p<?php endif; ?>
 <?php if($layout == 'imagefirst') { echo 'image-first'; } ?>" id="<?= $id ?>">
	<div class="grid-x grid-margin-xx">

        <?php if($layout == 'textfirst') { ?>

	        <div class="cell <?= $width_one ?> txt-block" style="background-color:<?= $background ?>; padding:<?= $padding ?>;">

	            <div data-aos="fade-left" data-aos-delay="800" class="title">
	                <h2><?= $title ?></h2>
	            </div>

	            <div data-aos="fade-right" data-aos-delay="1500"><?= $content ?></div>

	        </div>

	        <div data-aos="fade-left" data-aos-delay="400" class="cell <?= $width_two ?>">

	        <div class="txt-img-blk cover" data-interchange="[<?php echo $image['sizes']['featured-small'];?>, small], [<?php echo $image['sizes']['featured-medium'];?>, medium], [<?php echo $image['sizes']['featured-large'];?>, large], [<?php echo $image['sizes']['featured-xlarge'];?>, xlarge]"></div>

	        </div>

        <?php } else { ?>

        <div data-aos="fade-right" data-aos-delay="400" class="cell <?= $width_one ?>">

            <div class="txt-img-blk cover" data-interchange="[<?php echo $image['sizes']['featured-small'];?>, small], [<?php echo $image['sizes']['featured-medium'];?>, medium], [<?php echo $image['sizes']['featured-large'];?>, large], [<?php echo $image['sizes']['featured-xlarge'];?>, xlarge]"></div>

        </div>

        <div class="cell <?= $width_two ?> txt-block" style="background-color:<?= $background ?>; padding:<?= $padding ?>;">


            <?php if( get_sub_field('title') ): ?>
				<div data-aos="fade-left" data-aos-delay="800" class="title">
	                <h2><?= $title ?></h2>
	            </div>
			<?php endif; ?>

            <div data-aos="fade-right" data-aos-delay="1500"><?= $content ?></div>
            <img data-aos="fade-left" data-aos-delay="1800" src="<?= $secondary_image ?>">


        </div>


        <?php } ?>
    </div>
</section>
