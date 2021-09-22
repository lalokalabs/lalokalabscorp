<?php /* Template Name: Team Template */ ?>
<?php get_header(); ?>

<div class="container mx-auto my-8">

	<?php if ( have_posts() ) : ?>
	
	<?php
		while ( have_posts() ) :
		the_post();
	?>

	<div class="prose">
		<div class="max-w-5xl mx-auto text-center">
			<?php the_content(); ?>
		</div>
	</div>
	
	<?php endwhile; ?>
	
	<?php endif; ?>

	<div class="flex flex-wrap justify-center my-12">

	<?php
			$labmate_query = new WP_Query( array( 'post_type' => 'lab_mates')); 
		?>

	<?php if ( $labmate_query->have_posts() ) : ?>
	<?php 
			while ( $labmate_query->have_posts() ) :
			$labmate_query->the_post();
		?>

	<?php get_template_part( 'template-parts/team', 'card' ); ?>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>

	</div>

</div>

<?php
get_footer();