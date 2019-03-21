<?php
/*
Template Name: Page Blocks
*/
get_header(); ?>

<div class="main-container full">
	<div class="main-grid">
		<main class="main-content-full-width">

		<?php $section_counter = 0; ?>

		<!-- Start -->
					<?php

					if( have_rows('blocks') ):

					     // loop through the rows of data
					    while ( have_rows('blocks') ) : the_row();

					        if( get_row_layout() == 'team' ):

								 // load team
					        	get_template_part( 'template-parts/team/team-block' );

							elseif( get_row_layout() == 'text_and_image' ):

								// load article
								get_template_part( 'template-parts/text_and_image/block' );

							elseif( get_row_layout() == 'image' ):

								// load article
								get_template_part( 'template-parts/image/block' );

							elseif( get_row_layout() == 'hero' ):

								 // load hero
					        	get_template_part( 'template-parts/hero/block' );


							elseif( get_row_layout() == 'floorplan' ):

								// load quote
								get_template_part( 'template-parts/floorplan/block' );

							elseif( get_row_layout() == 'full_width_text' ):

								// load quote
								get_template_part( 'template-parts/full_width_text/block' );


							elseif( get_row_layout() == 'masonary_gallery' ):

								// load quote
								get_template_part( 'template-parts/masonary/block' );

					        endif;

					    endwhile;

					else :

					    // no layouts found

					endif;

					?>
		<!-- End -->
		</main>
	</div>
</div>
<?php
get_footer();
