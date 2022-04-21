<?php get_header(); ?>

<!-- hero section -->

<section>
	<div class="container px-4 lg:px-14 mx-auto py-20 md:py-32 lg:py-40 relative">

		<!-- transparent logo -->
		<svg class="absolute z-[-1] sm:top-0 right-0 w-56 md:w-[36rem]" id="レイヤー_1" data-name="レイヤー 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2286.75 2204.69"><defs><style>.cls-1{opacity:0.2;}.cls-2{fill:#221714;}.cls-3{fill:#ff7129;}.cls-4{fill:#5364ff;}.cls-5{fill:#e00069;}</style></defs><g class="cls-1"><polygon class="cls-2" points="891.66 1207.04 891.36 1206.54 891.36 1207.54 891.37 1207.54 891.66 1207.04"/><polygon class="cls-2" points="891.66 1207.04 891.37 1207.54 891.8 1207.29 891.66 1207.04"/><polygon class="cls-2" points="1041.66 1357.84 1042.69 1357.24 1042.17 1356.95 1041.66 1357.84"/><polygon class="cls-2" points="891.37 1207.54 891.36 1207.54 891.36 1207.55 891.37 1207.54"/><circle class="cls-3" cx="1508.25" cy="750.22" r="77.8"/><circle class="cls-4" cx="583.59" cy="978.94" r="77.8"/><circle class="cls-5" cx="1273.31" cy="1663.81" r="77.8"/><path class="cls-4" d="M1030.48,1028.21l-24-36L801.18,636.79,641.75,360.64a102.66,102.66,0,0,0-140.23-37.58h0A102.65,102.65,0,0,0,464,463.29L801.18,1047.4l-2.83,2.65L216.76,1385.82a102.66,102.66,0,0,0-37.57,140.23h0a102.65,102.65,0,0,0,140.23,37.57L595.89,1404l355.59-205.3,43-23.66A102.64,102.64,0,0,0,1030.48,1028.21Z"/><path class="cls-5" d="M1931.7,1741.91h0a102.66,102.66,0,0,0-37.57-140.22l-673.76-389a102.65,102.65,0,0,0-140.23,37.57L691.14,1924a102.65,102.65,0,0,0,37.58,140.22h0a102.64,102.64,0,0,0,140.22-37.57l335-580.31,3.51-4.05,584,337.16A102.66,102.66,0,0,0,1931.7,1741.91Z"/><path class="cls-3" d="M1343.33,904.64V229.31a102.65,102.65,0,0,0-102.65-102.65h0A102.65,102.65,0,0,0,1138,229.31v778A102.65,102.65,0,0,0,1240.68,1110h778a102.65,102.65,0,0,0,102.65-102.65h0a102.65,102.65,0,0,0-102.65-102.66Z"/></g></svg>
		<!-- end transparent logo -->

		<div class="text-center md:text-left mb-16 lg:w-1/2 ">
			<h1 class="text-4xl sm:text-5xl text-cool-gray-700 font-bold mb-2"><?php the_field('hero_title'); ?></h1>
			<h2 class="text-base font-medium text-cool-gray-600 leading-7">
				<?php the_field('hero_subtitle'); ?>
			</h2>
		</div>

		<div class="flex flex-col md:flex-row md:space-x-8 space-y-5 md:space-y-0">

			<?php 
			            
			$colors = ['#ff8031', '#e40074', '#6071ff'];
			$available_colors = $colors;

			?>

			<?php
				$work_query = new WP_Query( array( 'post_type' => 'lab_works')); 
			?>

			<?php if ( $work_query->have_posts() ) : ?>
			<?php 
				while ( $work_query->have_posts() ) :

				if (empty($available_colors)) {
					$available_colors = $colors;
				}

				$icon_color = array_shift($available_colors);

				$work_query->the_post();
			?>

			<div class="flex-1">
				<?php get_template_part( 'template-parts/work', 'card', ['icon_color' => $icon_color] ); ?>
			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>

		</div>

	</div>
</section>

<!-- end hero section -->

<!-- products section -->
<div class="bg-cool-purple-200">

	<div class="container px-4 lg:px-14 mx-auto py-20 md:py-24">

		<div class="mb-10 text-center">
			<h2 class="mb-3 text-3xl sm:text-4xl font-bold">
				<?php the_field('project_section_title'); ?>
			</h2>
			<p class="text-cool-gray-600 font-medium">
				<?php the_field('project_section_subtitle'); ?>
			</p>

		</div>

		<div class="flex flex-row flex-wrap justify-center -mb-8 -mx-4">
			<?php
					$product_query = new WP_Query( array( 'post_type' => 'lab_products', 'posts_per_page' => 3, )); 
				?>

			<?php if ( $product_query->have_posts() ) : ?>
			<?php 
					while ( $product_query->have_posts() ) :
					$product_query->the_post();
				?>

			<div class="w-full md:w-1/2 xl:w-1/3 mb-8 px-4">

				<?php get_template_part( 'template-parts/product', 'card' ); ?>

			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- end products section -->

<!-- team section -->

<section>
	<div class="container px-4 lg:px-14 mx-auto py-20 md:py-24">

		<h2 class="text-3xl sm:text-4xl font-bold text-cool-gray-700 mb-2">
			<?php the_field('team_section_title'); ?>
		</h2>

		<div class="text-base font-medium text-cool-gray-600 mb-10 leading-7">
			<?php the_field('team_section_subtitle'); ?>
		</div>

		<div class="flex flex-wrap -mb-8 -mx-4">

			<?php 
			            
			$position_colors = ['#ff8031', '#e40074', '#6071ff'];
			$available_position_colors = $position_colors;

			?>
			
			<?php
				$labmate_query = new WP_Query( array( 'post_type' => 'lab_mates')); 
			?>

			<?php if ( $labmate_query->have_posts() ) : ?>
			<?php 
				while ( $labmate_query->have_posts() ) :

				if (empty($available_position_colors)) {
					$available_position_colors = $position_colors;
				}

				$position_color = array_shift($available_position_colors);

				$labmate_query->the_post();
			?>

			<div class="w-full md:w-1/2 xl:w-1/3 mb-8 px-4">

				<?php get_template_part( 'template-parts/team', 'card', ['position_color' => $position_color] ); ?>

			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>

		</div>
	</div>
</section>

<!-- end team section -->

<?php
get_footer();