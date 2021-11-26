<div class="p-7 border shadow-sm h-full rounded">
    <div class="flex">
        <div>
            <?php
                                
            $post_thumbnail_url = get_template_directory_uri() . '/images/placeholder.png';
    
            if (has_post_thumbnail()) {
                $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
            }
    
            ?>
            <img class="object-cover w-full h-24" src="<?php echo $post_thumbnail_url ?>" alt="">
        </div>
        <div class="pl-3 flex flex-col">
            <div class="text-sm font-medium mb-1" style="color: <?php echo $args['position_color']; ?>;">
                <?php the_field('lab_position'); ?>
            </div>
            <div class="flex-1 text-lg font-semibold text-cool-gray-700 leading-5">
                <?php the_title(); ?>
            </div>
            <div class="mb-1">
                <!-- linkedin -->
                <a href="<?php the_field('linkedin_url'); ?>" class="hover:text-cool-gray-600 text-cool-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
                <!-- end linkedin -->
            </div>
        </div>
    </div>
    <div class="mt-4 font-medium text-cool-gray-600 text-xsm">
        <?php the_content(); ?>
    </div>
</div>