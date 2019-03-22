<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,900|Libre+Baskerville:400,700" rel="stylesheet">
		<?php wp_head(); ?>
		<?php get_template_part( 'template-parts/dynamic-css' ); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<!-- Global Variables -->

	<?php
		$header_logo = get_field('logo');
		$smllheader_logo = get_field('logo_sticky');
	?>

	<div id="site">

	<header id="header" class="main-container" role="banner">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 phone-12 mobile-12 medium-12" data-aos="fade-left" data-aos-delay="300">
			<?php if($header_logo) { ?>
				<img class="header-logo" src="<?= $header_logo['url'] ?>" alt="">
			<?php } else { ?>
				<img class="header-logo" src="https://via.placeholder.com/450x175" alt="">
			<?php } ?>
			</div>
			<div class="cell small-12 phone-12 mobile-12 medium-12">
				<nav class="navigation" id="mainNav" data-aos="fade-right" data-aos-delay="600">
					<?php if($header_logo) { ?>
						<div class="sticky-logo">
							<img src="<?= $header_logo['url'] ?>" alt="">
						</div>
					<?php } ?>


					<div class="grid-x mob-inner">
						<div class="cell small-6">
							<?php if($smllheader_logo) { ?>
								<div class="sticky-logo-sub">
									<img data-interchange="[<?php echo $smllheader_logo['sizes']['featured-medium'];?>, small], [<?php echo $smllheader_logo['sizes']['featured-medium'];?>, medium], [<?php echo $smllheader_logo['sizes']['featured-large'];?>, large], [<?php echo $smllheader_logo['sizes']['featured-xlarge'];?>, xlarge]" alt="">
								</div>
							<?php } else { ?>
								<div class="sticky-logo-title">
									<h4><?php bloginfo( 'name' ); ?></h4>
								</div>
							<?php } ?>
						</div>
						<div class="cell small-6">
								<button class="hamburger-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>">
								<span class="line--1"></span>
								<span class="line--2"></span>
								<span class="line--3"></span>
								<span class="line--4"></span>
								</button>
						</div>
					</div>


					<div class="nav-links">
						<?php if( have_rows('navigation') ): while ( have_rows('navigation') ) : the_row();
						echo '<a class="navigation__link" href="#' . get_sub_field('section_id') . '">' . get_sub_field('menu_label') . '</a>';
						endwhile; else : endif; ?>
					</div>



					<div class="mobile-nav" role="navigation">
						<ul>
						<?php if( have_rows('navigation') ): while ( have_rows('navigation') ) : the_row();
						echo '<li><a class="navigation__link" href="#' . get_sub_field('section_id') . '">' . get_sub_field('menu_label') . '</a></li>';
						endwhile; else : endif; ?>
						</ul>
					</div>

				</nav>
			</div>

		</div>
	</header>
