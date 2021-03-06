<?php get_header(); ?>

	<div class="container mx-auto my-10 md:my-14 px-4 lg:px-14 pb-12">

	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="max-w-4xl mx-auto">
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>
			

		<?php endwhile; ?>

	<?php endif; ?>

	</div>

<?php
get_footer();
