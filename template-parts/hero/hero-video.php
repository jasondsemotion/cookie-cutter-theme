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



<div class="hero hero-video">


	<div class="hero-inner">
			<div class="grid-x grid-margin-x">
				<div class="cell medium-12 large-12">
						<h1><?php the_sub_field('heading');?></h1>

						<?php if( get_sub_field('content') ): ?>
							<?php the_sub_field('content');?>
						<?php endif; ?>

						<?php if( get_sub_field('link') ): ?>
						<a href="<?php the_sub_field('link');?>" class="button"><?php the_sub_field('link_title');?></a>
						<?php endif; ?>


				</div>
			</div>
	</div>

	<!--<div class="embed-container">
				<?php the_sub_field('video'); ?>
	</div>-->

	<?php if( get_sub_field('video') ): ?>

	<div class="vimeo">
		<iframe src="https://player.vimeo.com/video/<?php the_sub_field('video'); ?>?autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1&background=1" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>
	<script src="https://player.vimeo.com/api/player.js"></script>

	<?php endif; ?>

</div>

