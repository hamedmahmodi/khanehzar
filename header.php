<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package khane_zar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="mainHeaderBack">
		<div class="mainHeader mainView">
			<a href="#"class="logoSection">
				لوگو
			</a>
			<div class="menuSection">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container_class'=>'mainMenu'
						)
					);
				?>
			</div>
			<div class="signSection">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.265 2.853a.75.75 0 0 1 .882-.588l1.05.21a2.75 2.75 0 0 1 2.197 2.422l.085.853h13.575a3.05 3.05 0 0 1 2.96 3.79l-1.124 4.49a4.25 4.25 0 0 1-4.123 3.22H7.774a2.75 2.75 0 0 1-2.73-2.422l-.99-8.246-.153-1.535a1.25 1.25 0 0 0-.999-1.102l-1.05-.21a.75.75 0 0 1-.587-.882ZM9 12.75a.75.75 0 0 0 0 1.5h4a.75.75 0 0 0 0-1.5H9Z" fill="#3F3F3F"></path><circle cx="8.5" cy="20" r="1.5" fill="#3F3F3F"></circle><circle cx="17.5" cy="20" r="1.5" fill="#3F3F3F"></circle></svg>
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.265 2.853a.75.75 0 0 1 .882-.588l1.05.21a2.75 2.75 0 0 1 2.197 2.422l.085.853h13.575a3.05 3.05 0 0 1 2.96 3.79l-1.124 4.49a4.25 4.25 0 0 1-4.123 3.22H7.774a2.75 2.75 0 0 1-2.73-2.422l-.99-8.246-.153-1.535a1.25 1.25 0 0 0-.999-1.102l-1.05-.21a.75.75 0 0 1-.587-.882ZM9 12.75a.75.75 0 0 0 0 1.5h4a.75.75 0 0 0 0-1.5H9Z" fill="#3F3F3F"></path><circle cx="8.5" cy="20" r="1.5" fill="#3F3F3F"></circle><circle cx="17.5" cy="20" r="1.5" fill="#3F3F3F"></circle></svg>
			</div>
		</div>
	</div>
</div>
