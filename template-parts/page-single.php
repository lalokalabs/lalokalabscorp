<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-8">
		<h1 class="entry-title text-3xl font-bold">
			<?php the_title(); ?>
		</h1>
	</header>

	<div class="entry-content">
		<div class="prose">
			<?php the_content(); ?>
		</div>
		
		<div class="entry-navigation">
			<?php
				wp_link_pages(
					array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					)
				);
			?>
		</div>
	</div>

	<p class="mt-3 text-sm font-medium leading-5">
		<?php 
			$categories = get_the_category();
			foreach ($categories as $category) {
				?>

		<a href="#" class="inline-block">
			<span class="inline-flex items-center px-3 py-1 text-xs font-medium leading-tight text-red-800 bg-red-100 rounded-full"><?php echo $category->name; ?></span>
		</a>

		<?php } ?>
	</p>

</article>
