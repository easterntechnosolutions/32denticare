<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<!-- Mobile Meta -->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- Favicons and Icons -->
		<!--<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">-->
		<!--<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">-->
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

	</head>

	<body <?php body_class(); ?>>
		<div class="page-wrapper">
			<!-- Main Header--><?php
			$blog_info = get_bloginfo( 'name' );
			$logo_full = "full";
			$attachment_image = get_field('logo', 'option');
			$logo_array = wp_get_attachment_image_src( $attachment_image['ID'], $logo_full ); ?>
			 <header class="header downscrolled clearfix">
                <div id="header">
                    <div id="site-header">                   
                        <div class="logo">
                            <a href="<?php echo site_url(); ?>">
								<img src="<?php echo $logo_array[0]; ?>" alt="Denticare Logo" title="32 Denti Care" class="lazyload"/>
                            </a>
                        </div>
                        <!-- //mobile menu button -->
                        <div class="nav-wrap">
                            <nav id="mainnav" class="mainnav">
                                <?php
                                    $args = array(
                                        'theme_location' => 'primary-navigation',
                                        'container' => 'menu',
                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'container' => 'false',
                                        'menu' => 'Top Menu',
                                        // 'menu_class'  		=> 'mega-menu-container',   
                                    );
                                    wp_nav_menu($args);
                                ?>
                            </nav>
                        </div>
                        <!-- /#mainnav -->
                        <div class="contact">
                            <div class="top-bar-right">
                                <div class="call-us">
                                    <div class="icon-call-us"></div>
                                    <div class="content-call-us">
                                        <p>Call Us</p>
                                        <a href="tel: +91 9723696993" class="font-bold text-color-title-sidebar">(+91) 9723696993</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-menu">
                            <span></span>
                        </div>
                    </div>
                </div>
             </header>