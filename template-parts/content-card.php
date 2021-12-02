<div class="h-full flex flex-col">

    <?php

    $post_thumbnail_url = get_template_directory_uri() . '/images/placeholder.png';

    if (has_post_thumbnail()) {
        $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
    } 
    
    ?>
    <a href="<?php echo get_permalink() ?>">
        <img class="object-cover w-full h-56 rounded border" src="<?php echo $post_thumbnail_url ?>" alt="">
    </a>
    
    <!-- categories and date -->
    <div class="flex items-center justify-between text-sm mt-5 mb-4">

        <div>
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

        <span class="text-cool-gray-600 text-xs"><?php echo get_the_date(); ?></span>
    </div>
    <!-- end categories -->

    <a href="<?php echo get_permalink() ?>" class="block text-xl font-bold hover:underline mb-2.5">
        <?php the_title(); ?>
    </a>

    <div class="flex-1 text-sm text-cool-gray-600 mb-4 leading-normal">
        <?php the_excerpt(); ?>
    </div>

</div>