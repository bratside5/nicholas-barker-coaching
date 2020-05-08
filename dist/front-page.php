<?php
/**
 * Custom PHP Front Page
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>



<main class="site-main" id="main">

    <!-- This Is The Hero Section // 1st Element on the Homepage 🧀   -->
    <section class="section-wrapper bg-light">
        <div class="container bg-light">
            <div class="row image-wrapper">
                <div class="col-md-6 left-content">
                    <!-- LRG Breakpoint Header -->
                    <h1 class="d-none d-lg-block display-3 hero-header-lg"><span class="hero-header-span">Nicholas
                            Barker</span>
                        Coaching</h1>
                    <!-- MD & Below Header Breakpoint -->
                    <h1 class="d-lg-none d-md-block display-3 hero-header-md py-3 my-4"><span
                            class="hero-header-span">Nicholas
                            Barker</span>
                        Coaching</h1>
                    <h3 class="text-dark display-5 hero-subheader">Break The Chain<br>
                        <span class="hero-subhead-span">In Just One Session With Me...</span>
                    </h3>
                    <div class="d-none d-lg-flex">
                        <div class="hero-button-group">
                            <button class="btn btn-rounded btn-lg button-1">Latest Course Offers</button>
                        </div>
                        <div class="hero-button-group">
                            <button class="btn btn-rounded btn-lg button-2">View My Testimonials</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right-content">
                    <div class="svg-hero d-none d-lg-flex">
                        <?php if ( get_field( 'hero_image' ) ) : ?>
                        <img src="<?php the_field( 'hero_image' ); ?>" />
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Second Section 🥯  -->
    <section class="about-me">
        <div class="container pb-5 pt-5">
            <div class="profile-pic-div rounded-circle mb-1">
                <?php if ( get_field( 'second_section_profile_pic' ) ) : ?>
                <img class='profile-pic rounded-circle mb-3'
                    src="<?php the_field( 'second_section_profile_pic' ); ?>" />
                <?php endif ?>
            </div>
            <div class="container text-center text-dark">
                <h1 class="text-center p-3" style="font-weight:100;"><?php the_field( 'second_section_heading' ); ?>
                </h1>
                <h4 class=" text-center"><?php the_field( 'second_section_subheading' ); ?></h4>
            </div>
            <hr>
            <div class="d-flex justify-content-around pt-2">
                <div class="">
                    <a target="_blank" href="<?php the_field( 'facebook_icon_link' ); ?> "><i
                            class="contact-icons fa fa-facebook-square fa-3x"></i></a>
                </div>
                <div class="">
                    <a href="<?php the_field( 'email_icon_link_copy' ); ?>"><i
                            class="contact-icons fa fa-envelope fa-3x"></i></a>
                </div>
                <div class="">
                    <a target="_blank" href="<?php the_field( 'whatsapp_icon_link' ); ?>">
                        <i class="contact-icons fa fa-phone fa-3x"></i></a>
                </div>
            </div>
            <hr>
            <div class="container text-center">
                <h4 class=""><?php the_field( 'small_paragragh_under_icons' ); ?></h4>
            </div>
        </div>
    </section>

    <!-- Course Section 🍨  -->
    <section class="homepage-courses my-2 p-3 bg-light">
        <div class="container">
            <h1 class="hp-courses-title text-center p-3">My Latest Courses</h1>
        </div>
        <div class="container">
            <div class="hp-courses-card text-center">
                <!-- Courses Query Loop 🍫  -->
                <div class="row justify-content-between ">
                    <?php $the_query=new WP_Query( array( 'post_type'=> 'courses' ) ); ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card mb-2">
                            <img class="card-img-top course-card-image" src="<?php echo $featured_img_url ?>" alt="">
                            <div class="card-body ">
                                <h4 class="card-title"><?php the_field( 'course_title' ); ?></h4>
                                <p class="card-text text-truncate"><?php the_field( 'course_subheading' ); ?></p>
                                <a href="<?php the_permalink()?>">Go to...</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p>
                        <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Testimonials 🍹  -->
    <section class="homepage-testimonials p-3">
        <div class="container">
            <h1 class="hp-testimonials-title text-center p-3">Testimonials from my clients</h1>
        </div>
        <div class="container">
            <div class="hp-testimonials-card text-center">
                <!-- Testimonial Query Loop 🍭  -->
                <div class="row justify-content-between ">
                    <?php $the_query=new WP_Query( array( 'post_type'=> 'testimonials' ) ); ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-sm-12 ">
                        <div class="card mb-2">
                            <div class="card-body">
                                <h4 class="card-title card-title-testimonial"><?php the_field( 'testimonial_by'); ?>
                                </h4>
                                <div class="content-card">
                                    <p class="card-text"><?php the_field( 'testimonial_content'); ?></p>
                                </div>
                                <div class="container">
                                    <a href="<?php the_permalink()?>">Go to...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p>
                        <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>


    <section class="qualifications text-center p-3 bg-light">
        <div class="container">
            <div class="qualification-title container">
                <h1 class="">My Qualifications</h1>
            </div>
            <div class="row">
                <?php $the_query=new WP_Query( array( 'post_type'=> 'qualifications' ) ); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                <div class="col-xs-6 col-md-4 my-3">
                    <div class="container">
                        <img class="img-responsive qualification-img" src="<?php echo $featured_img_url ?>" alt="">
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <p>
                    <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
                <?php endif; ?>
            </div>
        </div>
    </section>





</main>


<?php get_footer();