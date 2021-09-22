<?php get_header(); ?>

<div class="container mx-auto flex my-8">

	<div class="flex-1">

		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>

	<div class="border bg-gray-100 w-56 lg:w-96 ml-10">

		<?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
			<div id="secondary" class="flex flex-col space-y-4 p-4" role="complementary">
			<?php dynamic_sidebar( 'blog_sidebar' ); ?>
			</div>
		<?php endif; ?>
	</div>

</div>

<?php
get_footer();
