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
<div class="container ">
    <div class="container text-center mt-3">
        <h1 class="display-4">Courses</h1>
    </div>
    <div class="container text-center py-2">
        <h3 class="lead">Courses Subheading</h3>
    </div>
    <div class="row justify-content-between ">
        <?php $the_query=new WP_Query( array( 'post_type'=> 'courses' ) ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
        <div class="col-sm-12 col-md-6">
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
</div> <!-- .container -->

<?php
get_footer();