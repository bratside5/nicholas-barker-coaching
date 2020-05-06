<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<footer class="footer mobile-footer">
    <div class="footer-container text-light mx-3 px-3">
        <div class="d-flex justify-content-around pt-2">
            <div class="container py-3">
                <?php if ( ! has_custom_logo() ) { ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                <h1 class="navbar-brand custom-logo mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                        itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                <a class="navbar-brand custom-logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                    title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                    itemprop="url"><?php bloginfo( 'name' ); ?></a>

                <?php endif; ?>

                <?php
					} else {
						the_custom_logo();
					}
					?>
            </div>
            <div class="container d-flex d-lg-none justify-content-around align-items-center">
                <div class="text-muted ">
                    <a href="<?php the_field( 'facebook_icon_link' ); ?>"><i
                            class="fa fa-facebook-square fa-2x"></i></a>
                </div>
                <div class="text-muted ">
                    <a href="<?php the_field( 'email_icon_link_copy' ); ?>"><i class="fa fa-envelope fa-2x"></i></a>
                </div>
                <div class="text-muted ">
                    <a target="_blank" href="<?php the_field( 'whatsapp_icon_link' ); ?>"><i
                            class="fa fa-phone fa-2x"></i></a>
                </div>
            </div>
            <div class="desktop-footer">
                <div class="text-muted ">
                    <a href="<?php the_field( 'facebook_icon_link' ); ?>"><i
                            class="fa fa-facebook-square fa-2x"></i></a>
                </div>
                <div class="text-muted ">
                    <a href="<?php the_field( 'email_icon_link_copy' ); ?>"><i class="fa fa-envelope fa-2x"></i></a>
                </div>
                <div class="text-muted ">
                    <a target="_blank" href="<?php the_field( 'whatsapp_icon_link' ); ?>"><i
                            class="fa fa-phone fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>