<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tas-wppractice
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
			    <a class="navbar-brand" href="#">Navbar</a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			        <ul class="navbar-nav ml-auto">
			            <li class="nav-item active">
			                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			            </li>
			            <li class="nav-item">
			                <a class="nav-link" href="#">Link</a>
			            </li>
			            <li class="nav-item dropdown">
			                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			                    Dropdown
			                </a>
			                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			                    <a class="dropdown-item" href="#">Action</a>
			                    <a class="dropdown-item" href="#">Another action</a>
			                    <div class="dropdown-divider"></div>
			                    <a class="dropdown-item" href="#">Something else here</a>
			                </div>
			            </li>
			            <li class="nav-item">
			                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			            </li>
			        </ul>

			    </div>
		    </div>
		</nav>
	</header><!-- #masthead -->



	<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
		<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">
				<img src="<?php //echo()?> " alt="logo">
			</a>

			<?php 
				//$custom_logo_id = get_theme_mod( 'custom_logo' );
				//$image          = wp_get_attachment_image_src( $custom_logo_id , 'full' );

				if ( has_custom_logo() ) :
				?>
					<a class="navbar-brand" href="<?php //echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php //echo esc_url( $image[0] ); ?>">
					</a>
				<?php 
				endif;
			?>
			<?php
				wp_nav_menu( array(
				'theme_location'    => 'menu-1',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
				'menu_class'        => 'nav navbar-nav ml-auto',
				// 'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				// 'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>
		</div>
	</nav>

	<div id="content" class="site-content">
