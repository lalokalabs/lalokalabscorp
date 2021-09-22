<div class="flex-1 mx-3">
    <?php
            
        $post_thumbnail_url = get_template_directory_uri() . '/images/placeholder.png';

        if (has_post_thumbnail()) {
            $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
        }

    ?>
    <div class="inline-flex">
        <img class="h-12" src="<?php echo $post_thumbnail_url ?>" alt="product thumbnail" />
    </div>
    <h4 class="font-semibold text-cool-gray-700">
        <?php the_title(); ?>
    </h4>
    <div class="text-sm mt-1 text-cool-gray-500 mb-8 leading-6">
        <?php the_excerpt(); ?>
    </div>
</div>