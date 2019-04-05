<?php
/**
 *
 *
 *
 * Bulletpoint Container
 *
 *
 */
$section_id = get_sub_field('section_id');
$image = get_sub_field('image');
$background = get_sub_field('background_colour');
?>


<section class="page-section main-container bulletpoint-container"  id="<?php echo $section_id ?>">
    <div class="grid-x grid-margin-x">
        <!--<div class="cell small-12 bullet-title">
            <h2 data-aos="fade-left" data-aos-delay="250"><?= get_sub_field('title') ?></h2>
        </div>-->

        <div class="cell small-12 bullet-club" style="background-color: <?=$background;?>">
	         <div class="grid-x grid-margin-xx">
		         <?php if( have_rows('bulletpoint') ): while ( have_rows('bulletpoint') ) : the_row(); ?>
		<?php $image = get_sub_field('image');?>
		<div class="cell small-12 medium-6 large-4 bulletpoint-image">
		    <img data-aos="fade-left" data-aos-delay="250" data-interchange="[<?php echo $image['sizes']['featured-small'];?>, small], [<?php echo $image['sizes']['featured-medium'];?>, medium], [<?php echo $image['sizes']['featured-large'];?>, large], [<?php echo $image['sizes']['featured-xlarge'];?>, xlarge]" alt="">
		    <h4 data-aos="fade-left" data-aos-delay="450"><?= get_sub_field('point'); ?></h4>
		</div>
		<?php endwhile; else : endif; ?>
	         </div>
        </div>


    </div>
</section>