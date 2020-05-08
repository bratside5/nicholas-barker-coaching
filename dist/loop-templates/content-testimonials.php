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
    <blockquote class="blockquote text-center">
        <h6 class=""><?php the_field( 'testimonial_content' ); ?></h6>
        <hr>
        <p class="blockquote-footer bq-footer"><?php the_field( 'testimonial_by' ); ?></p>
    </blockquote>
</div>

<?php
        wp_link_pages(
        array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
        'after'  => '</div>',
        )
        );
        ?>