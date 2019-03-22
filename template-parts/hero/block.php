<?php
/**
 *
 *
 *
 * Hero
 *
 *
 */
?>

<div class="owl-carousel owl-theme owl-block-slider" id="hero">
<?php
	if( have_rows('hero_type') ):

		// loop through the rows of data
		while ( have_rows('hero_type') ) : the_row();

				if( get_row_layout() == 'hero_banner' ):

					//Level 1
					get_template_part( 'template-parts/hero/hero' );

				elseif( get_row_layout() == 'hero_img_banner' ):

					//Level 2
					get_template_part( 'template-parts/hero/hero-img' );

				//elseif( get_row_layout() == 'three_columns' ):

					//get_template_part( 'template-parts/text/three-col' );

				endif;

		 endwhile;

		else :

		 // no layouts found

	endif;
?>
</div>
