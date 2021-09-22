<?php get_header(); ?>

<!-- hero section -->

<?php get_template_part( 'template-parts/hero' ); ?>

<!-- end hero section -->

<!-- what we do section -->

<div class="pb-1 text-center text-gray-700 bg-primary-10 bg-cover">
	<div class="container relative max-w-2xl px-5 pt-12 mx-auto sm:py-12 lg:px-0">
		<h2
			class="mb-10 text-3xl font-semibold leading-10 tracking-tight text-left text-cool-gray-900 sm:text-5xl sm:leading-none md:text-3xl sm:text-center">
			<?php _e( 'What we do', 'lalokalabscorp' ); ?>
		</h2>
		<p class="mt-5 text-cool-gray-500 text-xl text-left opacity-75 sm:text-center">
			<?php _e( "Here are some cool things that we do at our lab.", 'lalokalabscorp' ); ?>
		</p>
	</div>
	<div class="my-8">
		<div class="container mx-auto mb-6 lg:mb-0">
			<div class="flex flex-col -mx-3">
				<div class="inline-flex flex-col sm:flex-row flex-1">
					
					<?php
						$work_query = new WP_Query( array( 'post_type' => 'lab_works')); 
					?>
					
					<?php if ( $work_query->have_posts() ) : ?>
					<?php 
						while ( $work_query->have_posts() ) :
						$work_query->the_post();
					?>
					
					<?php get_template_part( 'template-parts/work', 'card' ); ?>
					
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					
				</div>
				
			</div>
		</div>
		
	</div>


</div>

<!-- end what we do section -->

<!-- products section -->
<div class="pb-1 text-center text-gray-700 bg-primary-900 bg-cover">
	<div class="container relative max-w-2xl px-5 pt-12 mx-auto sm:py-12 lg:px-0">
		<h2
			class="mb-10 text-3xl font-semibold leading-10 tracking-tight text-left text-white sm:text-5xl sm:leading-none md:text-3xl sm:text-center">
			<?php _e( 'Awesome Products', 'lalokalabscorp' ); ?>
		</h2>
		<p class="mt-5 text-white text-xl text-left opacity-75 sm:text-center">
			<?php _e( "Here are some awesome products that we really think
			you'll like.", 'lalokalabscorp' ); ?>
		</p>
	</div>
	<div class="my-8">
		<div class="max-w-xl px-4 mx-auto sm:px-6 lg:max-w-screen-xl lg:px-8">
			<div class="lg:grid lg:grid-cols-3 lg:gap-8">

				<?php
					$product_query = new WP_Query( array( 'post_type' => 'lab_products', 'posts_per_page' => 3, )); 
				?>

				<?php if ( $product_query->have_posts() ) : ?>
				<?php 
					while ( $product_query->have_posts() ) :
					$product_query->the_post();
				?>

				<?php get_template_part( 'template-parts/product', 'card' ); ?>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div>
		</div>
	</div>


</div>
<!-- end products section -->

<!-- latest from blog section -->

<div class="py-12 bg-white">
	<div class="container flex flex-col items-center justify-center px-4 pt-2 pb-8 mx-auto sm:px-6 lg:px-8">

		<h2
			class="text-3xl font-extrabold leading-10 tracking-tight text-left text-gray-900 sm:text-5xl sm:leading-none md:text-3xl sm:text-center">

			<span class="relative">
				<?php _e( 'Latest from our Blog', 'lalokalabscorp' ); ?>
			</span>
		</h2>


		<div class="grid max-w-lg gap-5 mx-auto mt-12 md:grid-cols-2 lg:grid-cols-3 md:max-w-none">


			<?php
			   $recent_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, )); 
			?>

			<?php if ( $recent_query->have_posts() ) : ?>
			<?php 
				while ( $recent_query->have_posts() ) :
				$recent_query->the_post();
			?>

			<?php get_template_part( 'template-parts/content', 'card' ); ?>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>

		</div>
	</div>
</div>

<!-- end latest from blog section -->

<?php
get_footer();