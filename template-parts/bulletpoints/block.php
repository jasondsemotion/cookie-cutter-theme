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
$box_quote = get_sub_field('box_quote');
$image = get_sub_field('image');
?>
<section class="page-section main-container grey-container bulletpoint-container"  id="<?php echo $section_id ?>">
    <div class="grid-x grid-margin-x">
        <div class="cell small-12 bullet-title">
            <h2 data-aos="fade-left" data-aos-delay="250"><?= get_sub_field('title') ?></h2>
        </div>
		<?php
			if( have_rows('bullet_type') ):
				while ( have_rows('bullet_type') ) : the_row();
						if( get_row_layout() == 'normal_list' ):
							get_template_part( 'template-parts/bulletpoints/normal_list' );
						elseif( get_row_layout() == 'image_list' ):
							get_template_part( 'template-parts/bulletpoints/image_list' );
						endif;
				endwhile;
				else :
			endif;
		?>
    </div>
    <?php if($box_quote) { ?>
    <div class="fixed-comment">
        <div class="comment" data-aos="fade-right" data-aos-delay="1600">
            <h3 data-aos="fade-up" data-aos-delay="1800"><?= get_sub_field('box_quote') ?></h3>
        </div>
    </div>
    <?php } ?>
</section>