<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="container mb-auto">
    <div class="container text-center">
        <h1 class="display-4">Testimonials</h1>
    </div>
    <div class="row justify-content-between ">
        <?php $the_query=new WP_Query( array( 'post_type'=> 'testimonials' ) ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-sm-12 ">
            <div class="card mb-2">
                <div class="card-body">
                    <a href="<?php the_permalink()?>">Go to...</a>
                    <h4 class="card-title card-title-testimonial"><?php the_field( 'testimonial_by'); ?></h4>
                    <div class="content-card">
                        <p class="card-text"><?php the_field( 'testimonial_content'); ?></p>
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
</div> <!-- .container -->

<?php
get_footer();