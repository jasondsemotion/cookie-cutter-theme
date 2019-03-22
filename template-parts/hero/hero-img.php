<?php
/**
 *
 *
 *
 * Hero - Level 2
 *
 *
 */
?>

<?php
	$banner_image = get_sub_field('image');
	$heading = get_sub_field('heading');
	$content = get_sub_field('content');
	$link = get_sub_field('link');
	$link_title = get_sub_field('link_title');
?>

<div class="hero">
	<div class="bg-img" data-aos="fade-left" data-aos-delay="900" data-interchange="[<?php echo $banner_image['sizes']['fp-large'];?>, small], [<?php echo $banner_image['sizes']['fp-large'];?>, medium], [<?php echo $banner_image['sizes']['fp-large'];?>, large], [<?php echo $banner_image['sizes']['fp-xlarge'];?>, xlarge]"></div>
</div>


