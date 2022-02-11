<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Online_Education_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<table class="loader">
		<tr>
			<td>
				<div class="spinner">
					<div class="rect1"></div>
					<div class="rect2"></div>
					<div class="rect3"></div>
					<div class="rect4"></div>
					<div class="rect5"></div>
					<div class="rect6"></div>
				</div>
			</td>
		</tr>
	</table>
	<header class="header-fixed">
		<div class="header-top">
			<div class="container">
				<ul class="left">
					<li><span><i class="fa fa-phone" aria-hidden="true"></i></span> Phone : 8801 923 154 259</li>
					<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Opening Time : 9:30am-5:30pm</li>
					<li><span><i class="fa fa-home" aria-hidden="true"></i></span> Address : Labartisan 1205 Dhaka</li>
				</ul>
				<ul class="right">
					<li><i class="fa fa-registered" aria-hidden="true"></i> <a href="#">Register</a></li>
					<li>|</li>
					<li><i class="fa fa-lock" aria-hidden="true"></i> <a href="#">Login</a></li>
				</ul>
			</div><!-- container -->
		</div><!-- header top -->
		<div class="main-menu">
			<nav class="navbar ">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php the_custom_logo() ?>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<?php if (!is_user_logged_in()) { ?>
								<li><a href="<?php echo site_url('/login') ?>">Log In</a></li>
							<?php
							} else { ?>
								<li><a href="<?php echo site_url('/wp-login.php?action=logout') ?>">Log Out</a></li>
							<?php }
							?>

						</ul>
						<form class="menu-search-form">
							<input type="text" name="search" placeholder="Search here...">
							<span class="menu-search-close"><i class="fa fa-times" aria-hidden="true"></i></span>
						</form>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</div><!-- main menu -->
	</header>
	<!-- header End here -->