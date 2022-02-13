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
							<?php if (pmpro_hasMembershipLevel('UX Design Program', get_current_user_id())): ?>
								<li><a href="<?php echo site_url('/courses/ux-design-program/') ?>">UX Design</a></li>
							<?php
							elseif (pmpro_hasMembershipLevel('UI Design Program', get_current_user_id())): ?>
								<li><a href="<?php echo site_url('/courses/ui-design-program/') ?>">UI Design</a></li>
							<?php 
							elseif (pmpro_hasMembershipLevel('Full-Stack Web Development Program', get_current_user_id())): ?>
								<li><a href="<?php echo site_url('/courses/web-development-program/') ?>">Full-Stack Web Development Program</a></li>
							<?php 
							endif;
							?>
							<?php if (!is_user_logged_in()): ?>
								<li><a href="<?php echo site_url('/login') ?>">Log In</a></li>
							<?php
							else: ?>
								<li><a href="<?php echo site_url('/wp-login.php?action=logout') ?>">Log Out</a></li>
							<?php endif; ?>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</div><!-- main menu -->
	</header>
	<!-- header End here -->