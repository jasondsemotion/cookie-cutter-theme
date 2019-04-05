<?php
	$section_id = get_sub_field('section_id');
	$layout = get_sub_field('layout');
?>


<?php if($layout == 'thirds') { ?>


<section class="page-section main-container gallery-container" id="<?php echo $section_id; ?>">
	<div class="masonary-grid">



		<div class="masonary-sizer"></div>
		<?php if( have_rows('images') ): while ( have_rows('images') ) : the_row(); ?>
		<div class="masonary-item" data-aos="fade-left" data-aos-delay="250">
		<?php
			$image = get_sub_field('image');
			$caption = get_sub_field('caption');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)

			if( $image ) { ?>
			 <a class="chocolat-image" href="<?php echo $image['url']; ?>" title="<?php echo $caption ?>">

				<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php	}
				?>
			 </a>
		<?php if($caption) { ?>
			<div class="caption"><?php echo $caption ?></div>
		<?php } ?>
		</div>
		<?php endwhile; else : endif; ?>



	</div>
</section>



<?php } else { ?>



<section class="page-section main-container gallery-container the-halfs" id="<?php echo $section_id; ?>">
	<div class="masonary-grid">



		<div class="masonary-sizer"></div>
		<?php if( have_rows('images') ): while ( have_rows('images') ) : the_row(); ?>
		<div class="masonary-item" data-aos="fade-left" data-aos-delay="250">
		<?php
			$image = get_sub_field('image');
			$caption = get_sub_field('caption');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)

			if( $image ) { ?>
			 <a class="chocolat-image" href="<?php echo $image['url']; ?>" title="<?php echo $caption ?>">

				<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php	}
				?>
			 </a>
		<?php if($caption) { ?>
			<div class="caption"><?php echo $caption ?></div>
		<?php } ?>
		</div>
		<?php endwhile; else : endif; ?>



	</div>
</section>




<?php } ?>




