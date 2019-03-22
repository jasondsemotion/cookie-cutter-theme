<?php
/**
 *
 *
 *
 * Map
 *
 *
 */
 $title = get_sub_field('title');
  $mapcontent = get_sub_field('map_content');
  $id = get_sub_field('section_id');

?>

<section class="page-section main-container map-container" id="<?php echo $section_id; ?>">
	<div class="grid-x grid-margin-x">
		<?php if($title) { ?>
			<div class="cell small-12 large-6">
				<div data-aos="fade-left" data-aos-delay="800" class="title">
			                <h2><?= $title ?></h2>
			    </div>
			</div>
		<?php } ?>
		<?php if($mapcontent) { ?>
			<div class="cell small-12 large-6">
				<div data-aos="fade-left" data-aos-delay="800" class="">
			          <?= $mapcontent ?>
			    </div>
			</div>
		<?php } ?>


		<div class="cell large-12">
		<?php
		$location = get_sub_field('map');

		if( !empty($location) ):?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
						<div class="maptext">
								<?php the_sub_field('map_text'); ?>
						</div>
				</div>
			</div>
		<?php endif; ?>
		</div>
	</div>
</div>
