
<?php if( have_rows('bulletpoint') ): while ( have_rows('bulletpoint') ) : the_row(); ?>
<?php $animate_timer = $animate_timer + 300; ?>
<div class="cell small-12 medium-5 medium-offset-1 bulletpoint">
    <p data-aos="fade-left" data-aos-delay="<?= $animate_timer; ?>"><?= get_sub_field('point'); ?></p>
</div>
<?php endwhile; else : endif; ?>