<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Online_Education_Theme
 */

get_header();
?>

<!-- Banner Start here -->
<section class="banner">
	<div class="banner-slider swiper-container">
		<div class="swiper-wrapper">
			<div class="banner-item slide-one swiper-slide">
				<div class="banner-overlay"></div>
				<div class="container">
					<div class="banner-content">
						<h3>Welcome To Our All Study</h3>
						<h2>Best For Education</h2>
						<p>Batter Education For Batter World</p>
					</div><!-- banner-content -->
				</div><!-- container -->
			</div><!-- slide item -->
			<div class="banner-item slide-two swiper-slide">
				<div class="banner-overlay"></div>
				<div class="container">
					<div class="banner-content">
						<h3>Welcome To Our All Study</h3>
						<h2>Best For Education</h2>
						<p>Batter Education For Batter World</p>
					</div><!-- banner-content -->
				</div><!-- container -->
			</div><!-- slide item -->
			<div class="banner-item slide-three swiper-slide">
				<div class="banner-overlay"></div>
				<div class="container">
					<div class="banner-content">
						<h3>Welcome To Our All Study</h3>
						<h2>Best For Education</h2>
						<p>Batter Education For Batter World</p>
					</div><!-- banner-content -->
				</div><!-- container -->
			</div><!-- slide item -->

		</div><!-- swiper-wrapper -->
		<div class="swiper-pagination"></div>
	</div><!-- swiper-container -->
</section><!-- banner -->
<!-- Banner End here -->

<!-- Courses Start here -->
<section class="courses padding-120">
	<div class="container">
		<div class="section-header">
			<h3>Popular Online Courses</h3>
			<p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic strategic themeplatform.</p>
		</div>
		<div class="row">
			<?php
			$courses = new WP_Query(array(
				'post_type' => 'courses',
				'posts_per_page' => -1
			));

			while ($courses->have_posts()) {
				$courses->the_post(); ?>
				<div class="col-md-4 col-sm-6 col-xs-12">

					<div class="course-item">
						<div class="image">
							<?php the_post_thumbnail(); ?>
							<span><sup>$</sup>200</span>
						</div>
						<div class="content card">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<ul>
								<li><span><i class="fa fa-user" aria-hidden="true"></i></span> Robot Smith</li>
								<li>|</li>
								<li><span><i class="fa fa-calendar" aria-hidden="true"></i></span> 24 April 2017</li>
							</ul>
							<p><?php the_excerpt(); ?></p>
							<?php if (pmpro_hasMembershipLevel(get_the_title(), get_current_user_id())) { ?>
								<a href="<?php the_permalink(); ?>">
									<button>View Course</button>
								</a>
							<?php } else { ?>
								<a href="<?php echo esc_url(site_url(the_field('enrolment_url'))); ?>">
									<button>Enroll</button>
								</a>
							<?php } ?>
							<div class="bottom">
								<ul>
									<li><span><i class="fa fa-users" aria-hidden="true"></i></span> 730</li>
									<li><span><i class="fa fa-comment" aria-hidden="true"></i></span> 350</li>
								</ul>
								<div class="course-rating">
									<span><i class="fa fa-star" aria-hidden="true"></i></span>
									<span><i class="fa fa-star" aria-hidden="true"></i></span>
									<span><i class="fa fa-star" aria-hidden="true"></i></span>
									<span><i class="fa fa-star" aria-hidden="true"></i></span>
									<span><i class="fa fa-star" aria-hidden="true"></i></span>
								</div>
							</div>
						</div><!-- content -->
					</div><!-- course item -->
				</div>

			<?php } ?>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- courses -->
<!-- Courses End here -->


<!-- Achievements Start here -->
<section class="achievements section-notch">
	<div class="overlay padding-120">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="achievement-item">
						<i class="icon flaticon-student"></i>
						<span class="counter">2500</span>
						<p>Students Enrolled</p>
					</div><!-- achievement item -->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="achievement-item">
						<i class="icon flaticon-cup"></i>
						<span class="counter">912</span>
						<p>Best Awards Won</p>
					</div><!-- achievement item -->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="achievement-item">
						<i class="icon flaticon-drawing"></i>
						<span class="counter">370</span>
						<p>Classes Completed</p>
					</div><!-- achievement item -->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="achievement-item">
						<i class="icon flaticon-book"></i>
						<span class="counter">648</span>
						<p>Our Total Courses</p>
					</div><!-- achievement item -->
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- overlay -->
</section><!-- achievements -->
<!-- Achievements End here -->

<!-- Subscribe Start here -->
<section class="subscribe">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12 col-xs-12">
				<h3>Join Our Newsletter</h3>
			</div>
			<div class="col-md-7 col-sm-12 col-xs-12">
				<form action="/">
					<input type="text" placeholder="Enter your e-mail here">
					<input type="submit" value="Subscribe Now">
				</form>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- subscribe -->
<!-- Subscribe End here -->

<?php
get_footer();
