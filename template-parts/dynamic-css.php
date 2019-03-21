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
        color: <?= $header_font_colour ?>;
        font-weight: 500;
        text-transform: uppercase;
    }

    .download-brochure-button {
        background-color: <?= $primary; ?>;
        color: <?= $heading_font_colour ?>;
        padding: 10px 20px;
        font-size: 14px;
        text-decoration: none;
        margin-top: 70px;
        display: table;
    }

    .download-brochure-button {
        background-color: <?= $primary; ?>!important;
        color: <?= $heading_font_colour ?>!important;
        font-weight: bold!important;
    }

    h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
        font-family: <?= $heading_font_family ?>;
        font-size: <?= $heading_font_size ?>px;
        color: <?= $heading_font_colour ?>;
        font-weight: 500;
    }

    h3 {
        font-size: <?= $heading_font_size / 2 + 5; ?>px;
    }

    h4 {
        font-size: <?= $heading_font_size / 3 + 5; ?>px;
    }

    h2, .h2 {
        background: linear-gradient(to bottom, <?= $heading_bg_colour; ?> 0%, <?= $heading_bg_colour; ?> 50%, <?= $heading_bg_colour; ?> 100%, <?= $heading_bg_colour; ?> 100%);
        /*color: <?= $primary; ?>;*/
        color: <?= $header_font_colour; ?>;
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
    }
    .navigation__link:hover {
	    border-bottom: 2px solid <?= $primary ?>;
    }


    .main-container {
		background: <?= $container_bg ?>;
    }

</style>