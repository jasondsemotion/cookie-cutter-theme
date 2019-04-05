<?php
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $background = get_sub_field('background_colour');
    $section_id = get_sub_field('section_id');
    $layout = get_sub_field('layout');
?>




<?php if($layout == 'add-margins') { ?>


<section class="page-section main-container full-width-text add-margins" id="<?= $section_id; ?>" >
    <div class="grid-x grid-margin-x">
        <div class="cell small-12" style="background-color: <?=$background;?>">

	        <?php if($title) { ?>
            <div class="title">
                <h2 data-aos="fade-left" data-aos-delay="750"><?= $title ?></h2>
            </div>
            <?php } ?>

            <?php if($content) { ?>
            <div data-aos="fade-right" data-aos-delay="1500">
	            <div class="copy-box">
	            <?= $content ?>
	            </div>
	        </div>

	        <?php } ?>

        </div>
    </div>
</section>


<?php } else { ?>


<section class="page-section main-container full-width-text" id="<?= $section_id; ?>" style="background-color: <?=$background;?>">
    <div class="grid-x grid-margin-x">
        <div class="cell small-12">

	        <?php if($title) { ?>
            <div class="title">
                <h2 data-aos="fade-left" data-aos-delay="750"><?= $title ?></h2>
            </div>
            <?php } ?>

            <?php if($content) { ?>
            <div data-aos="fade-right" data-aos-delay="1500">
	            <div class="copy-box">
	            <?= $content ?>
	            </div>
	        </div>

	        <?php } ?>

        </div>
    </div>
</section>



<?php } ?>

