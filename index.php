<?php get_header(); ?>

<section>

	<!-- categories -->
	<div style="background-color: #f3f5fd;" class="py-4">

		<div class="container mx-auto px-4 lg:px-14">

		<?php
			$category_name = get_query_var('category_name');
			$all_class = '';

			if (empty($category_name)) {
				$all_class = 'bg-purple-800 text-white';
			}
 		?>

		<a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="inline-block text-sm font-medium hover:bg-purple-800 hover:text-white rounded-full py-1 px-4 mr-4 <?php echo $all_class; ?>">
            All
        </a>

		<?php $categories = get_categories();

		foreach ($categories as $category) { 
			$category_link = get_category_link( $category );

			$category_class = '';
			
			if ($category_name == $category->slug) {
				$category_class = 'bg-purple-800 text-white';
			}
		?>
			<a href="<?php echo esc_url( $category_link ); ?>" class="inline-block text-sm font-medium hover:bg-purple-800 hover:text-white rounded-full py-1 px-4 mr-4 <?php echo $category_class; ?>">
                <?php echo $category->name; ?>
            </a>
		<?php } ?>

		</div>
	</div>
	<!-- end categories -->

	<!-- post list -->

	<div class="container mx-auto pt-12 pb-20 px-4 lg:px-14">

		<?php if ( have_posts() ) : ?>

			<div class="flex flex-wrap -mb-16 -mx-4">
				
					<?php
					while ( have_posts() ) :
						the_post();
						?>

						<div class="w-full sm:w-1/2 lg:w-1/3 mb-16 px-4">

						<?php get_template_part( 'template-parts/content', 'card' ); ?>

						</div>

					<?php endwhile; ?>

				
			</div>

			<!-- pagination -->



			<div class="mt-4">
				<div class="nav-previous alignleft font-semibold hover:underline text-purple-800"><?php previous_posts_link( 'Prev' ); ?></div>
				<div class="nav-next alignright font-semibold hover:underline text-purple-800"><?php next_posts_link( 'Next' ); ?></div>
			</div>

			<!-- end pagination -->

		<?php endif; ?>


	</div>

	<!-- end post list -->
	
</section>

<?php
get_footer();
