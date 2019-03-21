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
?>

<div class="hero">
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

				if($link_title) {
					echo '<a href="' . $link . '" class="button">' . $link_title . '</a>';
				}
			?>
			</div>
		</div>
	</div>
	<div class="bg-img" data-aos="fade-left" data-aos-delay="900" data-interchange="[<?php echo $banner_image['sizes']['fp-large'];?>, small], [<?php echo $banner_image['sizes']['fp-large'];?>, medium], [<?php echo $banner_image['sizes']['fp-large'];?>, large], [<?php echo $banner_image['sizes']['fp-xlarge'];?>, xlarge]"></div>
</div>


