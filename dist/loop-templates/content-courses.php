<?php
/**
 * Single Testimonials partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<div class="container bq-container">
    <h1><?php the_field( 'course_title' ); ?></h1>
    <h3><?php the_field( 'course_subheading' ); ?></h3>
    <div class="img-responsive">
        <?php if ( get_field( 'course_image' ) ) : ?>
        <img src="<?php the_field( 'course_image' ); ?>" />
        <?php endif ?>
    </div>
    <div class="course-description">
        <p class="lead">
            <?php the_field( 'course_description' ); ?>
        </p>
    </div>
    <div class="course-price">
        <h2>£<?php the_field( 'course_price' ); ?></h2>
    </div>
    <div class="extra-course-info mb-3">
        <p class=""><?php the_field( 'additional_course_information' ); ?></p>
    </div>
</div>

<?php
        wp_link_pages(
        array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
        'after'  => '</div>',
        )
        );
        ?>