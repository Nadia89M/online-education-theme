<?php
/* Template Name: Membership Template */

/**
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package online-education-theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Courses Start here -->
    <section class="courses padding-120">
        <div class="container">
            <div class="section-header">
                <h3>Our Online Courses</h3>
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
                                <h4><?php the_title(); ?></h4>
                                <ul>
                                    <li><span><i class="fa fa-user" aria-hidden="true"></i></span> Robot Smith</li>
                                    <li>|</li>
                                    <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span> 24 April 2017</li>
                                </ul>
                                <p><?php the_excerpt(); ?></p>
                                <?php if(pmpro_hasMembershipLevel(get_the_title(), get_current_user_id())) { ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <button>View Course</button>
                                    </a>
                                <?php } else {?>
                                    <a href="<?php echo the_field('enrolment_url'); ?>">
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

</main><!-- #main -->

<?php get_footer(); ?>