<?php
/*
* This is the header template file for the theme. This build
* the <head> section of the theme.
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
	
		/**************************************************************************
        * Hook pxjn_after_body
        **************************************************************************/
        do_action( 'pxjn_after_body' );
	
	?>
	
	<header class="main">
	
		<nav id="site-navigation" class="main-navigation" role="navigation">
		
			<h1 class="menu-toggle">Menu</h1>

			<?php
				
				/* set some args for the main menu */
				$pxjn_main_menu_args = array(
					'theme_location' => 'primary',
				);
				
				wp_nav_menu( $pxjn_main_menu_args );
			
			?>
			
		</nav><!-- #site-navigation -->
	
	</header>