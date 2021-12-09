<article id="post-<?php the_ID(); ?>" <?php post_class('max-w-4xl mx-auto'); ?>>

	<div class="mb-2.5 text-sm font-medium leading-5">
		<?php 
			$categories = get_the_category();
			foreach ($categories as $category) {
				$category_link = get_category_link( $category );

		?>

		<a href="<?php echo esc_url( $category_link ); ?>" class="inline-block">
			<span class="inline-flex items-center px-3 py-1 text-xs font-medium leading-tight text-red-800 bg-red-100 rounded-full"><?php echo $category->name; ?></span>
		</a>

		<?php } ?>
	</div>

	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title text-3xl lg:text-4xl font-bold leading-tight mb-6"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700 mr-1"><?php echo get_the_date(); ?></time> <b>·</b> <span class="capitalize text-sm font-semibold text-gray-700 ml-1"><?php echo get_the_author_meta('display_name'); ?></span>
	</header>

	<hr class="my-8">

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

	

</article>
