<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<?php
    $footer_logo = get_field('footer_logo');
    $terms = get_field('terms');
    $terms_and_conditions = get_field('terms_and_conditions');
?>
<footer id="footer">
    <div class="main-container">
        <div class="grid-x grid-margin-x">
            <div class="cell small-12 medium-12 large-8">

				<div class="grid-x grid-margin-xx">
					<div class="cell small-12">
		                <div class="title"><h2>Contacts</h2></div>
	                </div>
				</div>

                <div class="grid-x grid-margin-x footer-detail">
	                <div class="cell small-12 medium-12 large-4 logo-col">
		                <div class="logo">
		                    <img src="<?= $footer_logo['url'] ?>" alt="">
		                </div>
	                </div>
	                <?php if( have_rows('contact') ): while ( have_rows('contact') ) : the_row(); ?>
	                <div class="cell small-12 medium-6 large-4">
		                <div class="contact">
		                 <div class="name"><?= get_sub_field('name'); ?></div>
		                 <a href="mailto:<?= get_sub_field('email'); ?>"><?= get_sub_field('email'); ?></a><br>
						 <a href="tel:<?= get_sub_field('contact_number'); ?>"><?= get_sub_field('contact_number'); ?></a>
		                </div>
	                </div>
	                 <?php endwhile; else : endif; ?>
                </div>



            </div>
            <div class="cell small-12 medium-12 large-4">
	            <div class="col-txt">
                <?= $terms ?>
	            </div>
            </div>
            <div class="cell small-12">
                <p class="terms"><?= $terms_and_conditions; ?></p>
            </div>
            <div class="cell small-12 accreditation">
                &copy; <?= date('Y'); ?> <?php wp_nav_menu(); ?>
            </div>
        </div>
    </div>
</footer>


</div>
<?php wp_footer(); ?>


<!--<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>-->
<!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
</body>
</html>