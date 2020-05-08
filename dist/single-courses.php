<?php
/**
 * The template for displaying all single posts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

        <main class="site-main" id="main">

            <?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content-courses');
					understrap_post_nav();

				}
				?>

        </main>
    </div>
</div>

<?php
get_footer();