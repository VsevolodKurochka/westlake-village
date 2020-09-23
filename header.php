<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package westlake
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <?php if (!is_page_template('template-no-header.php')) { ?>
    <div class="nav__fixed">
        <div class="nav" id="js-navigation">
            <div class="nav__container container">
                <div class="nav__row">
                    <div class="nav__logo">
                        <button class="hamburger hamburger_effect-2" type="button" id="js-nav-hamburger">
                            <span class="hamburger__lines"><span></span><span></span><span></span><span></span></span>
                        </button>
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="nav__content">
                        <a href="tel: (805) 870-5918" class="nav__phone">
                            <i aria-hidden="true" class="fas fa-phone-volume"></i>
                            <span>(805) 870-5918</span>
                        </a>
                        <nav class="nav__menu" id="js-navigation-menu">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1'
                                )
                            );
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>