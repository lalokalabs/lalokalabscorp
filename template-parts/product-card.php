<div class="h-full flex flex-col rounded-lg shadow border overflow-hidden bg-white">
    <?php

    $post_id = get_the_ID();
        
    $post_thumbnail_url = get_template_directory_uri() . '/images/placeholder.png';

    if (has_post_thumbnail()) {
        $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
    }

    ?>
    <img class="object-cover w-full pt-3 pb-2 border-b" src="<?php echo $post_thumbnail_url; ?>" alt="">
    <div class="flex-1 flex flex-col p-6 bg-white">
        <h3 class="text-cool-gray-700 text-2xl font-semibold mb-0.5"><?php the_title(); ?></h3>
        <h4 class="text-cool-gray-700 text-sm font-medium mb-4"><?php the_field('product_tagline'); ?></h4>

        <div class="flex-1 font-medium text-xsm text-cool-gray-600">
            <?php the_excerpt(); ?>
        </div>

        <div class="mt-6">
            <a class="block bg-primary-300 hover:bg-primary-500 w-full text-center rounded-md text-sm font-semibold py-3 text-white"
                href="<?php the_field('product_url'); ?>"><?php _e( 'Learn More >', 'lalokalabscorp' ); ?></a>
        </div>
    </div>
</div>