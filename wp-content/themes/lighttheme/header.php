<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
    <link rel="icon" type="image/png" href="#">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="container">
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'container' => 'primary-navigation', 'menu_id' => 'primary-navigation', 'before' => '' ) ); ?>
				</nav>
				<button class="hamburger hamburger--spin" type="button">
					<span class="hamburger-box">
				    	<span class="hamburger-inner"></span>
				  	</span>
				</button>
			</div>
		</header>