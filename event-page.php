<?php /* Template Name: Custom Event List */ ?>

<?php get_header(); ?>

<!-- 
    Code snippet reference:
    wp-content/plugins/modern-events-calendar-lite/app/skins/list/render.php
    https://webnus.net/dox/modern-events-calendar/overriding-mec-shortcodes-skin/
 -->

<div class="container mx-auto py-12">

    <h2 class="mb-10 text-5xl font-bold"><?php _e( 'Events', 'lalokalabscorp' ); ?></h2>

    <div class="flex flex-row flex-wrap justify-center -mb-8 -mx-4">

        <?php

        $shortcode_id = get_option('event-skin-shortcode-id');

        if (empty($shortcode_id)) {
            var_dump("Please setup custom option event-skin-shortcode-id");
        }

        $events = MEC_main::get_shortcode_events($shortcode_id);

        $desc_events = array_reverse($events);

        if (!empty($desc_events)) {
            foreach ($desc_events as $key => $date_events) {

                foreach ($date_events as $event) {

                    $permalink = get_permalink($event->ID);

                    $cover_image_url = $event->data->featured_image["thumblist"];

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

            <div class="w-full sm:w-1/2 md:w-1/3 mb-8 px-4">
                <div class="h-full flex flex-col rounded-lg shadow-sm border overflow-hidden">
                    <?php
                        
                    $default_cover_url = get_template_directory_uri() . '/images/placeholder.png';

                    if (empty($cover_image_url)) {
                        $cover_image_url = $default_cover_url;
                    } 

                    ?>
                    <div class="relative">
                        <img class="object-cover w-full h-56" src="<?php echo $cover_image_url; ?>" alt="">

                        <!-- expired label -->

                        <?php if ($expired) { ?>

                        <div class="absolute top-0 right-0 bg-red-500 text-white font-medium py-1 px-2 shadow-lg">
                            Expired
                        </div>

                        <?php } ?>
                        <!-- end expired label -->

                        <!-- upcoming label -->

                        <?php if (!$expired) { ?>

                        <div class="absolute top-0 right-0 bg-cool-purple-500 text-white font-medium py-1 px-2 shadow-lg">
                            Upcoming
                        </div>

                        <?php } ?>
                        <!-- end upcoming label -->
                    </div>
                    
                    <div class="flex-1 flex flex-col p-6 bg-white">
                        <a href="<?php echo $permalink; ?>" class="text-cool-gray-700 hover:text-cool-gray-800 text-2xl font-semibold"><?php echo $event->data->title; ?></a>

                        <div class="mt-4 flex-1 font-medium text-xsm text-cool-gray-600">
                            <?php echo $excerpt; ?> ...
                        </div>

                        <div class="mt-6">

                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cool-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    
                                    <div class="font-medium text-lg">
                                        <?php echo date_i18n('M j, Y', strtotime($event_start_date)); ?>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cool-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="uppercase text-lg font-extralight">
                                        <?php echo $start_time; ?> <?php if (!empty($end_time)) { ?> - <?php echo $end_time; ?> <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <a class="block bg-cool-purple-500 w-full text-center rounded-md text-sm font-medium py-2 text-white"
                                href="<?php echo $permalink; ?>"><?php _e( 'View Detail', 'lalokalabscorp' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } } } ?>
        
    </div>


</div>

<?php
get_footer(); ?>