<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

    <title><?php wp_title('|', true, 'right'); ?></title>

    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

    <?php wp_head(); ?>

    <link href="http://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>

</head>

<body <?php body_class(); ?>>

<div class="header section small-padding bg-dark bg-image" style="background-image: url(<?php if (get_header_image() != '') : ?><?php header_image(); ?><?php else : ?><?php echo get_template_directory_uri() . '/images/header.jpg'; ?><?php endif; ?>);">

    <div class="cover"></div>

    <div class="header-search-block bg-graphite hidden" style="background-image: url(<?php echo get_template_directory_uri() . '/images/levelup/07t2mb2.gif'; ?>);">

        <div class="section-inner row" style="color: white;margin-top: 10px; font-family: 'Racing Sans One', cursive; font-size: 32px;">
            <h1>Overclocking</h1>
        </div>

        <div class="section-inner row">

            <div class="column column-1 one-third">
a
            </div>
            <div class="column column-2 one-third">
 b
            </div>
            <div class="column column-3 one-third">
  c
            </div>

        </div>





    </div> <!-- /header-search-block -->

    <div class="header-inner section-inner">

        <?php if ( get_theme_mod( 'baskerville_logo' ) ) : ?>

            <div class="blog-logo">

                <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
                    <img src='<?php echo esc_url( get_theme_mod( 'baskerville_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
                </a>

            </div>

        <?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) : ?>

            <h1 class="blog-title">
                <a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
            </h1>

            <?php if ( get_bloginfo( 'description' ) ) { ?>

                <h3 class="blog-description"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></h3>

            <?php } ?>

        <?php endif; ?>

    </div> <!-- /header-inner -->

</div> <!-- /header -->

<div class="navigation section no-padding bg-dark">

    <div class="navigation-inner section-inner">

        <div class="nav-toggle fleft hidden">

            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>

            <div class="clear"></div>

        </div>

        <ul class="main-menu">

            <?php if ( has_nav_menu( 'primary' ) ) {

                wp_nav_menu( array(

                    'container' => '',
                    'items_wrap' => '%3$s',
                    'theme_location' => 'primary',
                    'walker' => new baskerville_nav_walker

                ) ); } else {

                wp_list_pages( array(

                    'container' => '',
                    'title_li' => ''

                ));

            } ?>

        </ul> <!-- /main-menu -->

        <a class="search-toggle fright" href="#"></a>

        <div class="clear"></div>

    </div> <!-- /navigation-inner -->

</div> <!-- /navigation -->

<div class="mobile-navigation section bg-graphite no-padding hidden">

    <ul class="mobile-menu">

        <?php if ( has_nav_menu( 'primary' ) ) {

            wp_nav_menu( array(

                'container' => '',
                'items_wrap' => '%3$s',
                'theme_location' => 'primary',
                'walker' => new baskerville_nav_walker

            ) ); } else {

            wp_list_pages( array(

                'container' => '',
                'title_li' => ''

            ));

        } ?>

    </ul> <!-- /main-menu -->

</div> <!-- /mobile-navigation -->