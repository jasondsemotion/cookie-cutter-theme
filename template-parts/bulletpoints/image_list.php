<?php if( have_rows('bulletpoint') ): while ( have_rows('bulletpoint') ) : the_row(); ?>
<?php $image = get_sub_field('image');?>
<div class="cell small-12 medium-4 bulletpoint-image">
    <img data-aos="fade-left" data-aos-delay="250" data-interchange="[<?php echo $image['sizes']['featured-small'];?>, small], [<?php echo $image['sizes']['featured-medium'];?>, medium], [<?php echo $image['sizes']['featured-large'];?>, large], [<?php echo $image['sizes']['featured-xlarge'];?>, xlarge]" alt="">
    <p data-aos="fade-left" data-aos-delay="450"><?= get_sub_field('point'); ?></p>
</div>
<?php endwhile; else : endif; ?>