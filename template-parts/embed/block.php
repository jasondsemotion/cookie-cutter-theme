<?php
/**
*** Embed
**/
$embed_code = get_sub_field('embed_code');
 $title = get_sub_field('title');
 $embed_content = get_sub_field('embed_content');
$id = get_sub_field('section_id');


?>


<section class="page-section main-container emebed-container" id="<?php echo $section_id; ?>">
    <div class="grid-x grid-margin-x">
	    <?php if($title) { ?>
			<div class="cell small-12 large-6">
				<div data-aos="fade-left" data-aos-delay="800" class="title">
			                <h2><?= $title ?></h2>
			    </div>
			</div>
		<?php } ?>
		<?php if($embed_content) { ?>
			<div class="cell small-12 large-6">
				<div data-aos="fade-left" data-aos-delay="800" class="">
			          <?= $embed_content ?>
			    </div>
			</div>
		<?php } ?>
        <div class="cell large-12">
	        <div class="embed-container">
            <?php echo get_sub_field('embed_code'); ?>
	        </div>
        </div>
    </div>
</div>
