<?php
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $background = get_sub_field('background_colour');
    $section_id = get_sub_field('section_id');
?>
<section class="page-section main-container full-width-text" id="<?= $section_id; ?>" style="background-color: <?=$background;?>">
    <div class="grid-x grid-margin-x">
        <div class="cell small-12">
            <div class="title">
                <h2 data-aos="fade-left" data-aos-delay="750"><?= $title ?></h2>
            </div>
            <div data-aos="fade-right" data-aos-delay="1500"><?= $content ?></div>
        </div>
    </div>
</section>