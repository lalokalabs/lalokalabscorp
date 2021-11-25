<?php get_header(); ?>

	<div class="container mx-auto my-8 flex flex-col lg:flex-row">

	<?php
	
	$post_id = get_the_ID();
	
	$single = new MEC_skin_single();
	$single_event_main = $single->get_event_mec($post_id);
	$single_event_obj = $single_event_main[0];
	
	?>

	<div class="w-full lg:w-2/3">

	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();

			?>

			<?php
                                
            $post_thumbnail_url = get_template_directory_uri() . '/images/placeholder.png';
    
            if (has_post_thumbnail()) {
                $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
            } ?>

			<img class="object-cover w-full h-96 rounded border" src="<?php echo $post_thumbnail_url ?>" alt="">

			<div class="mb-10">
				<h1 class="text-4xl font-bold my-8"><?php the_title(); ?></h1>

				<div class="prose sm:prose-sm lg:prose-lg">
					<?php the_content(); ?>
				</div>
			</div>

			<div class="mec-single-event">

				<?php 
					echo $single->display_export_widget($single_event_obj);
				?>
				
				<?php echo $single->display_countdown_widget($single_event_main); ?>
				
			</div>

			

			<div class="mt-10">
				
			</div>

			

		<?php endwhile; ?>

	<?php endif; ?>

	</div>

	<div class="w-full lg:w-1/3 pl-0 lg:pl-6">

	<!-- date widget -->

	<div class="p-4 shadow-sm border rounded">
		<?php echo $single->display_date_widget($single_event_obj); ?>
		<?php echo $single->display_time_widget($single_event_obj); ?>
	</div>

	
	<?php echo $single->display_social_widget($single_event_obj); ?>

	
	<!-- end date widget -->

	</div>

	

	</div>

<?php
get_footer();
