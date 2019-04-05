<?php
    $primary = get_field('primary_colour');
    $body_bg = get_field('body_background');
    $container_bg = get_field('container_background');

    // Header
    $header_font_family = get_field('header_font_family');
    $header_font_size = get_field('header_font_size');
    $header_font_colour = get_field('header_font_colour');

    // Headings
    $heading_font_family = get_field('heading_font_family');
    $heading_font_size = get_field('heading_font_size');
    $heading_font_colour = get_field('heading_font_colour');
    $heading_bg_colour = get_field('heading_bg_colour');

    // Headings
    $paragraph_font_family = get_field('paragraph_font_family');
    $paragraph_font_size = get_field('paragraph_font_size');
    $paragraph_font_colour = get_field('paragraph_font_colour');


    $line_height = get_field('line_height');


    $mobile_menu_background = get_field('mobile_menu_background');
    $mobile_menu_color = get_field('mobile_menu_color');
	$nav_font_colour= get_field('nav_font_colour');


	$footer_background_colour = get_field('footer_background_colour');
	$footer_background_colour_text = get_field('footer_background_colour_text');
	$footer_header_colour_text = get_field('footer_header_colour_text');


?>


<style>

    <?php  if ( ! is_admin() ) { ?>
        html, body {
            background: #242829;
            background: <?= $body_bg ?>;
        }
    <?php } ?>
    .navigation__link {
        font-family: <?= $header_font_family ?>;
        font-size: <?= $header_font_size ?>px;
        color: <?= $nav_font_colour ?>;
        font-weight: 500;
        text-transform: uppercase;
    }

    .download-brochure-button {
        background-color: <?= $primary; ?>;
        /*color: <?= $heading_font_colour ?>;*/
        color: #fff;
        padding: 10px 20px;
        font-size: 14px;
        text-decoration: none;
        margin-top: 40px;
        display: table;
    }

    .download-brochure-button {
        background-color: <?= $primary; ?>!important;
        /*color: <?= $heading_font_colour ?>!important;*/
        color: #fff;
        font-weight: bold!important;
    }

    h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
        font-family: <?= $heading_font_family ?>;
        /*font-size: <?= $heading_font_size ?>px;*/
        color: <?= $heading_font_colour ?>;
        font-weight: 500;
    }

    h1 {
	    font-size: 6vw;
    }

    h3 {
        /*font-size: <?= $heading_font_size / 2 + 5; ?>px;*/
    }

    h4 {
        font-size: <?= $heading_font_size / 2; ?>px;
    }

    h5 {
        font-size: <?= $heading_font_size / 2; ?>px;
    }

    h6 {
        font-size: <?= $heading_font_size / 3; ?>px;
    }

    .title h2, .title .h2 {
        background: linear-gradient(to bottom, <?= $heading_bg_colour; ?> 0%, <?= $heading_bg_colour; ?> 50%, <?= $heading_bg_colour; ?> 100%, <?= $heading_bg_colour; ?> 100%);
        /*color: <?= $primary; ?>;*/
        color: <?= $header_font_colour; ?>;
        display: inline;
    }

    html, body, p, .p {
        font-family: <?= $paragraph_font_family ?>;
        font-size: <?= $paragraph_font_size ?>px;
        color: <?= $paragraph_font_colour ?>;
        line-height: <?= $line_height ?>px;
    }

    p a:link,p a:visited {
	    color: <?= $primary; ?>;
    }
    p a:hover {
	    color: <?= $primary; ?>;
	    text-decoration: underline;
    }

    /*html, body {
	    background: #fff;
    }*/

    .comment {
        background: <?= $primary ?>;
    }

    .navigation__link.active {
	    border-bottom: 2px solid <?= $primary ?>;
	    color: <?= $nav_font_colour ?>;
    }
    .navigation__link:hover,.navigation__link:focus {
	    border-bottom: 2px solid <?= $primary ?>;
	    color: <?= $nav_font_colour ?>;
    }


    .main-container {
		background: <?= $container_bg ?>;
    }

    .mobile-nav {
	    background: <?= $mobile_menu_background ?>;
    }
    .mobile-nav ul {
	    background: transparent;
    }
    #header .mobile-nav ul li a {
	    color: <?= $mobile_menu_color ?>;
    }


    #footer {
	    background: <?= $footer_background_colour ?>;
	    color: <?= $footer_background_colour_text ?>;
    }
    #footer p, #footer .name {
	     color: <?= $footer_background_colour_text ?>;
    }
    #footer h1, #footer h3, #footer h4, #footer h5, #footer h6 {
	    color:  <?= $footer_header_colour_text ?>
    }
    #footer .contact a {
	    color: <?= $primary; ?>;
    }
    .menu-footer-menu-container li a {
	    color: <?= $footer_background_colour_text ?> !important;
	    border-right: 1px solid <?= $footer_background_colour_text ?>;
    }


    .hamburger-icon span {
	    background: <?= $mobile_menu_background ?>;
    }

    .hero-style-bg-black h1, .hero-style-bg-black h2, .hero-style-bg-black h3, .hero-style-bg-black h4, .hero-style-bg-black h5 {
	    color: <?= $header_font_colour; ?>;
    }

    .hero .hero-inner h1 {
	    color: <?= $paragraph_font_colour ?>;
    }


</style>