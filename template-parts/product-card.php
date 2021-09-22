<div class="p-16 transition-all duration-150 bg-white rounded-lg shadow-xl ease hover:shadow-2xl">
    <div class="relative inline-flex items-center justify-center">
        <?php
        
        $post_thumbnail_url = get_template_directory_uri() . '/images/placeholder.png';

        if (has_post_thumbnail()) {
            $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
        }

        ?>

        <img class="h-12" src="<?php echo $post_thumbnail_url ?>" alt="product thumbnail" />
    </div>
    <div class="mt-3 mb-6">
        <h5 class="pb-2 text-xl font-bold leading-6 text-gray-600">
            <?php the_title(); ?>
        </h5>
        <p class="mt-1 text-base leading-6 text-gray-500">
            <?php the_excerpt(); ?>
        </p>
        <div class="mt-3">
            <a class="px-3 py-1 text-base font-medium leading-tight text-white transition duration-150 ease-in-out border border-transparent bg-purple-500 hover:bg-purple-600 focus:border-purple-600 focus:outline-none focus:shadow-outline-purple rounded-full"
                href="<?php the_field('product_url'); ?>">View Product</a>

        </div>
    </div>
</div>