<?php /* Template Name: Custom Event List */ ?>

<?php get_header(); ?>

<!-- 
    Code snippet reference:
    wp-content/plugins/modern-events-calendar-lite/app/skins/list/render.php
    https://webnus.net/dox/modern-events-calendar/overriding-mec-shortcodes-skin/
 -->

<div class="container mx-auto py-12 px-4 lg:px-14">

    <h2 class="mb-8 text-3xl font-bold"><?php _e( 'Events', 'lalokalabscorp' ); ?></h2>

    <div class="flex flex-row flex-wrap -mb-8 -mx-4">

        <?php

        $shortcode_id = get_field('me_event_skin_shortcode');

        if (empty($shortcode_id)) {
            var_dump("Please setup ACF field me_event_skin_shortcode at event page");
        }

        $events = MEC_main::get_shortcode_events($shortcode_id);

        if (!empty($events)) {

            $desc_events = array_reverse($events);

            foreach ($desc_events as $key => $date_events) {

                foreach ($date_events as $event) {

                    $permalink = get_permalink($event->ID);

                    /*
                    thumbnail, thumblist, gridsquare, meccarouselthumb, medium, large, full, tileview
                    */
                    $cover_image_url = $event->data->featured_image["large"];

                    $excerpt = trim($event->data->post->post_excerpt) ? $event->data->post->post_excerpt : '';

                    $event_start_date = !empty($event->date['start']['date']) ? $event->date['start']['date'] : '';
                    $start_time = (isset($event->data->time) ? $event->data->time['start'] : '');
                    $end_time = (isset($event->data->time) ? $event->data->time['end'] : '');
                        
                    // Safe Excerpt for UTF-8 Strings
                    if(!trim($excerpt))
                    {
                        $ex = explode(' ', strip_tags(strip_shortcodes($event->data->post->post_content)));
                        $words = array_slice($ex, 0, 10);
                        
                        $excerpt = implode(' ', $words);
                    }

                    $expired = False;
                    
                    if (new DateTime() > new DateTime($event_start_date)) {
                        $expired = True;
                    }
            ?>

            <div class="w-full md:w-1/2 lg:w-1/3 mb-12 px-4">
                <div class="h-full flex flex-col rounded-lg shadow border overflow-hidden">
                    <?php
                        
                    $default_cover_url = get_template_directory_uri() . '/images/placeholder.png';

                    if (empty($cover_image_url)) {
                        $cover_image_url = $default_cover_url;
                    } 

                    ?>
                    <div class="relative">
                        <!-- expired image&label -->
                        <?php if ($expired) { ?>
                        <img class="object-cover w-full h-56 filter grayscale" src="<?php echo $cover_image_url; ?>" alt="">

                        <div class="absolute top-0 right-0 bg-red-600 text-white font-semibold py-1.5 px-2.5 shadow-lg rounded-bl text-sm">
                            Expired
                        </div>

                        <?php } ?>
                        <!-- end expired label -->

                        <!-- upcoming image&label -->
                        <?php if (!$expired) { ?>
                        <img class="object-cover w-full h-56" src="<?php echo $cover_image_url; ?>" alt="">

                        <div class="absolute top-0 right-0 bg-primary-300 text-white font-semibold py-1.5 px-2.5 shadow-lg rounded-bl text-sm">
                            Upcoming
                        </div>

                        <?php } ?>
                        <!-- end upcoming label -->
                    </div>
                    
                    <div class="flex-1 flex flex-col p-6 bg-white">
                        <h3 class="text-cool-gray-700 text-xl font-bold leading-snug"><?php echo $event->data->title; ?></h3>

                        <div class="mt-4 mb-6 flex flex-col space-y-2 flex-1 ">
                            <div class="flex items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-cool-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                
                                <div class="font-medium text-sm text-gray-600">
                                    <?php echo date_i18n('M j, Y', strtotime($event_start_date)); ?>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-cool-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="uppercase font-medium text-sm text-gray-600">
                                    <?php echo $start_time; ?> <?php if (!empty($end_time)) { ?> - <?php echo $end_time; ?> <?php } ?>
                                </div>
                            </div>
                        </div>

                        <a class="block bg-primary-300 hover:bg-primary-500 w-full text-center rounded-md text-sm font-semibold py-3 text-white"
                            href="<?php echo $permalink; ?>"><?php _e( 'View Detail >', 'lalokalabscorp' ); ?>
                        </a>
                    </div>
                </div>
            </div>

        <?php } } } ?>
        
    </div>


</div>

<?php
get_footer(); ?>