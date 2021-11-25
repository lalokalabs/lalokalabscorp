<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'lalokalabscorp_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'lalokalabscorp_header' ); ?>

	<header class="primary-navigation border-b">
		<div class="mx-auto container lg:flex lg:justify-between lg:items-center p-4">
			<div class="flex justify-between items-center">
				<div>

					<?php
						$logo_url = get_template_directory_uri() . '/images/labs-logo-2x.png';
					?>

					<a href="<?php echo get_bloginfo( 'url' ); ?>">
						<img class="h-14 -ml-3" src="<?php echo $logo_url; ?>" alt="lalokalabs logo">
					</a>

				</div>

				<div class="lg:hidden">
					<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
						<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
								<g id="icon-shape">
									<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
										  id="Combined-Shape"></path>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>

			<?php
			wp_nav_menu(
				array(
					'container_id'    => 'primary-menu',
					'container_class' => 'main-nav hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
					'menu_class'      => 'menu-wrapper2 lg:flex lg:-mx-4',
					'theme_location'  => 'primary',
					'li_class'        => 'lg:mx-4',
					'fallback_cb'     => false,
				)
			);
			?>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">

		<?php do_action( 'lalokalabscorp_content_start' ); ?>

		<main>
