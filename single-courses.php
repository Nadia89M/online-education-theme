<?php

/**
 * The template for displaying all single courses
 *
 * @package Online_Education_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Page Header Start here -->
    <section class="page-header">
        <div class="overlay">
            <div class="container">
                <h3>Courses Single Page</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li> - </li>
                    <li>Courses</li>
                </ul>
            </div>
        </div><!-- overlay -->
    </section>
    <!-- Page Header End here -->


    <!-- Courses Start here -->
    <section class="courses padding-120">
        <div class="container">

                    <div class="course-single-item">
                        <div class="image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <ul class="course-meta">
                            <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Robot Smith</a></li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i><a href="#">24 April 2017 </a></li>
                            <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">350 Comments </a></li>
                            <li class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>(12Reviews) </span>
                            </li>
                        </ul>

                        <h4>The Courses Description:</h4>
                        <p><?php the_content( ); ?></p>
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <ul class="course-features">
                                    <li class="title">Course Features</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> Course Durations <span>12 Month</span></li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i> No of Lectures <span>20</span></li>
                                    <li><i class="fa fa-graduation-cap" aria-hidden="true"></i> Certification <span>Yes</span></li>
                                    <li><i class="fa fa-users" aria-hidden="true"></i> Students <span>1200</span></li>
                                    <li><i class="fa fa-line-chart" aria-hidden="true"></i> Study Skill Level <span>Beginner</span></li>
                                    <li><i class="fa fa-dollar" aria-hidden="true"></i> Fee <span>250.00</span></li>
                                </ul>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <h4>Certification:</h4>
                                <p>Progressively promote highly efficient and a leadership Distinctively strategize marketdriven thar architectures Rapidiously enhance an expanded array crean of supply Progressively promote highly efficient aweso leadership Distinctively strategize marketdriven are architecetures Rapidiously enhance an expanded array of are an supply </p>
                                <p>Progressively promote highly efficient leadership a skills Distinctively strategize marketdriven architectures vis a Rapidiously enhance an expanded array of supply chains friendly strategic theme areas friendly strategic thareas awesome education theme.</p>
                            </div>
                        </div><!-- row -->

                        <div class="outcomes">
                            <h4>Learning Outcomes:</h4>
                            <p>Progressively promote highly efficient leadership skill with plugand creative educatonplay alignment Distinctively strategize marketdriven architectures vis a avis professional collaboration and ideashai Rapidiously enhance an expanded array of supply chains for real-time services. Uniquely visualize an user Progressively promote highly efficient leadership skills with plugand creative educationplay and alignment Distinctively strategize marketdriven architectures vis avis professional collaboration and ideashaing Rapidiously enhance an expanded array of supply chains for real-time services. Uniquely visualize user.</p>
                            <p>Progressively promote highly efficient leadership skills with plugand creative education alignments Distinctively strategize marketdriven architectures vis a avis professional collaborations ideashaing Rapidiously enhance an expanded array of supply chains for a real-time services. Uniquely visualize user friendly strategic theme areas friendly strategic theme areas.</p>

                            <?php $sections = get_field("sections");
                                if($sections) {
                                    foreach($sections as $section) { ?>
                                        <div class="course-attachments">
                                            <h4><?php echo get_the_title($section->ID); ?></h4>
                                            <ul>
                                                <li><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <a href="#">Credibly recaptiualize innovative channels after</a> <span>24 min</span></li>
                                                <li><i class="fa fa-volume-up" aria-hidden="true"></i> <a href="#">Credibly recaptiualize innovative channels after</a> <span>24 min</span></li>
                                                <li><i class="fa fa-file-video-o" aria-hidden="true"></i> <a href="#">Credibly recaptiualize innovative channels after</a> <span>24 min</span></li>
                                                <li><i class="fa fa-file-archive-o" aria-hidden="true"></i> <a href="#">Credibly recaptiualize innovative channels after</a> <span>24 min</span></li>
                                                <li><i class="fa fa-file-word-o" aria-hidden="true"></i> <a href="#">Credibly recaptiualize innovative channels after</a> <span>24 min</span></li>
                                            </ul>
                                        </div>
                                   <?php }
                                }
                            ?>

                        </div><!-- outcomes -->

                        <div class="instructor">
                            <h4>About Instructor</h4>
                            <div class="content-bg">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/courses/instructor.jpg" alt="instructor image" class="img-responsive">
                                </div>
                                <div class="content">
                                    <h5>Robot Jhonson</h5>
                                    <span>Senior Teacher</span>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Interactively reconceptualize plugandplay users for resource-leveling leadership skills redibly optimize Appopriately reinvent sticky convergence rather than business benefits completely a innovate that and ogonal architectures via pandemic bandwidth.</p>
                        </div><!-- Instructor -->

                        <div class="course-reviews">
                            <h4>Reviews</h4>

                            <div class="av-rating-bg">
                                <h5>Avarege Rating</h5>
                                <div class="av-rating">
                                    <span>5</span>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <p>4 Ratings</p>
                                </div>
                            </div>
                            <div class="de-rating-bg">
                                <h5>Detailed Rating</h5>
                                <div class="de-rating">
                                    <div class="rat-item">
                                        <span class="left">Star 5</span>
                                        <span class="middle"><span class="fill"></span></span>
                                        <span class="right">5</span>
                                    </div>
                                    <div class="rat-item">
                                        <span class="left">Star 4</span>
                                        <span class="middle"><span class="fill"></span></span>
                                        <span class="right">4</span>
                                    </div>
                                    <div class="rat-item">
                                        <span class="left">Star 3</span>
                                        <span class="middle"><span class="fill"></span></span>
                                        <span class="right">3</span>
                                    </div>
                                    <div class="rat-item">
                                        <span class="left">Star 2</span>
                                        <span class="middle"><span class="fill"></span></span>
                                        <span class="right">2</span>
                                    </div>
                                    <div class="rat-item">
                                        <span class="left">Star 1</span>
                                        <span class="middle"><span class="fill"></span></span>
                                        <span class="right">1</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- reviews -->

                        <div class="course-reviews">
                            <div class="review-item">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/courses/review_01.jpg" alt="client image" class="img-responsive">
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <h5>Robot Smith</h5>
                                        <span>Posted on December 25, 2013 at 6:57 am</span>
                                        <div class="course-rating">
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <p>Objectively enable scalable leadership without and media leadership theme awesome theme without flexible solutions awesome theme are interactive architectures.</p>
                                </div>
                            </div><!-- review item -->
                            <div class="review-item">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/courses/review_02.jpg" alt="client image" class="img-responsive">
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <h5>Janaton Doe</h5>
                                        <span>Posted on December 25, 2013 at 6:57 am</span>
                                        <div class="course-rating">
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <p>Objectively enable scalable leadership without and media leadership theme awesome theme without flexible solutions awesome theme are interactive architectures.</p>
                                </div>
                            </div><!-- review item -->
                            <div class="review-item">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/courses/review_03.jpg" alt="client image" class="img-responsive">
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <h5>Robot Jhonson</h5>
                                        <span>Posted on December 25, 2013 at 6:57 am</span>
                                        <div class="course-rating">
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <p>Objectively enable scalable leadership without and media leadership theme awesome theme without flexible solutions awesome theme are interactive architectures.</p>
                                </div>
                            </div><!-- review item -->
                            <div class="review-item">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/courses/review_04.jpg" alt="client image" class="img-responsive">
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <h5>Janaton Smith</h5>
                                        <span>Posted on December 25, 2013 at 6:57 am</span>
                                        <div class="course-rating">
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <p>Objectively enable scalable leadership without and media leadership theme awesome theme without flexible solutions awesome theme are interactive architectures.</p>
                                </div>
                            </div><!-- review item -->
                        </div><!-- course reviews -->
                    </div><!-- course single item -->
        </div><!-- container -->
    </section><!-- courses -->
    <!-- Courses End here -->


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


</main><!-- #main -->

<?php
get_footer();
