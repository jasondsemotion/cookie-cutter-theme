<?php
$brochure = get_sub_field('download_brochure_url');
$total_sq = get_sub_field('total_sq_ft');
$total_m = get_sub_field('total_sq_m');
$section_id = get_sub_field('section_id');
$cont = get_sub_field('content');
?>
<section class="page-section main-container gallery-container" id="<?= $section_id; ?>">
    <div class="grid-x grid-margin-x">
        <div class="cell small-12 medium-7">
            <div class="title title-center">
                <h2 data-aos="fade-left" data-aos-delay="600">Floorplan</h2>
            </div>
            <div data-aos="fade-left" data-aos-delay="900" class="owl-carousel owl-floorplan owl-theme">
                <?php
                    $slide_counter = 0;
                ?>
            <?php if( have_rows('floor') ): while ( have_rows('floor') ) : the_row(); ?>

                <?php
                    $image = get_sub_field('image');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    $slide_counter++;
                ?>
                <div data-hash="<?= $slide_counter ?>" class="item">
                    <h4><?= get_sub_field('title') ?></h4>
                    <?php
                    if( $image ) { ?>
				 <a class="chocolat-image" href="<?php echo $image['url']; ?>" title="<?= get_sub_field('title') ?>">

					<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php	}
					?>
				 </a>



                </div>
            <?php endwhile; else : endif; ?>
            </div>
        </div>
        <div class="cell small-12 medium-5">
            <div class="title" data-aos="fade-left" data-aos-delay="900">
                <h2>Availability</h2>
            </div>
            <!--<div class="title" data-aos="fade-left" data-aos-delay="1100">
                <h4>Flexibility</h4>
            </div>
            <p data-aos="fade-left" data-aos-delay="1300">With suites from 2,734 sq ft The Yard offers 6,950 - 27,748 sq ft of contemporary office space set over 3 floors.</p>-->

            <?= $cont ?>

            <table data-aos="fade-left" data-aos-delay="1500" class="floorplan-table">
                <tr>
                    <th></th>
                    <th>SQ FT</th>
                    <th>SQ M</th>
                </tr>
                <?php
                    $table_counter = 0;
                ?>
                <?php if( have_rows('floor') ): while ( have_rows('floor') ) : the_row(); ?>
                <?php $table_counter++ ?>

                <tr>
                    <td><a href="#<?php echo $table_counter; ?>"><?= get_sub_field('title'); ?></a></td>
                    <td><a href="#<?php echo $table_counter; ?>"><?= get_sub_field('sq_ft'); ?></a></td>
                    <td><a href="#<?php echo $table_counter; ?>"><?= get_sub_field('sq_m'); ?></a></td>
                </tr>
                <?php endwhile; else : endif; ?>
                <tr>
                    <td><strong>Total:</strong></td>
                    <td><strong><?= $total_sq ?></strong></td>
                    <td><strong><?= $total_m ?></strong></td>
                </tr>
            </table>
            <?php if($brochure) { ?>
                <a href="<?= $brochure; ?>" class="button download-brochure-button">Download Brochure</a>
            <?php } ?>
        </div>
    </div>
</section>