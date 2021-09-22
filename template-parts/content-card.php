<div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
	<div class="relative flex-shrink-0">

		<?php
		
		$post_thumbnail_url = get_template_directory_uri() . '/images/placeholder.png';

        if (has_post_thumbnail()) {
            $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
        }

		?>
		
		<img class="object-cover w-full h-56"
			src="<?php echo $post_thumbnail_url ?>"
			alt="post thumbnail" />
		<span
			class="absolute bottom-0 right-0 inline-flex items-center px-3 py-1 mr-4 -mb-3 text-xs font-medium leading-tight text-gray-800 bg-gray-100 border rounded-full">
			<?php echo get_comments_number() ?>
			comments
		</span>
	</div>
	<div class="flex flex-col justify-between flex-1">
		<div class="flex flex-col justify-between flex-1 p-6 bg-white">
			<div>
				<a href="<?php echo get_permalink() ?>" class="block text-xl font-semibold leading-7 text-gray-900">
					<?php the_title(); ?>
				</a>
				<p class="mt-3 text-base leading-6 text-gray-500">
					<?php the_excerpt(); ?>
				</p>
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
		</div>
		<div class="flex items-center p-6 bg-gray-100">
			<div class="flex-shrink-0">
				<a href="#">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 40, '', 'avatar', array('class' => 'rounded-full') ); ?>
				</a>
			</div>
			<div class="ml-3">
				<p class="text-sm font-medium leading-5 text-gray-900">
					<a href="#" class="hover:underline">
						<?php echo get_the_author_meta('display_name'); ?>
					</a>
				</p>
				<div class="text-xs leading-5 text-gray-600">
					<time datetime="<?php echo get_the_date( 'c' ); ?>">
						<?php echo get_the_date(); ?>
					</time>
				</div>
			</div>
		</div>
	</div>
</div>