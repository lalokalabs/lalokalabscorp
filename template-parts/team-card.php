<div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
    <div class="team-item border shadow m-4">
        <div class="team-content relative" style="top: -45px;">

            <div class="team-img border shadow w-32 rounded-full overflow-hidden text-center mx-auto">
                <?php
                                
                        $post_thumbnail_url = get_template_directory_uri() . '/images/placeholder.png';
                
                        if (has_post_thumbnail()) {
                            $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
                        }
                
                        ?>
                <img class="img-fluid" src="<?php echo $post_thumbnail_url ?>" alt="">
            </div>
            <div class="text-center px-5 py-3">
                <h3 class="team-name text-xl text-cool-gray-700 font-bold">
                    <?php the_title(); ?>
                </h3>
                <p class="text-primary-700 font-semibold">
                    <?php the_field('lab_position'); ?>
                </p>
                <div class="text-sm text-cool-gray-500 mt-4">
                    <?php the_excerpt(); ?>
                </div>
            </div>

        </div>

    </div>
</div>