<?php
/**
 *
 *
 *
 * Hero - Level 1
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

	// Overlay
    $overlay_bg = get_sub_field('overlay_colour');
    $overlay_txt = get_sub_field('overlay_text_colour');

?>



<div class="hero special-color">
	<div class="hero-inner">
		<div class="grid-x grid-margin-x">
			<div class="cell medium-12 large-12">
			<?php
				if($heading) {
					echo '<h1>' . $heading . '</h1>';
				}

				if($content) {
					echo $content;
				}
			?>
			</div>
		</div>
	</div>
	<div class="bg-img" data-aos="fade-left" data-aos-delay="900" data-interchange="[<?php echo $banner_image['sizes']['fp-large'];?>, small], [<?php echo $banner_image['sizes']['fp-large'];?>, medium], [<?php echo $banner_image['sizes']['fp-large'];?>, large], [<?php echo $banner_image['sizes']['fp-xlarge'];?>, xlarge]"></div>
</div>


