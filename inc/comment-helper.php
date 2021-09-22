<?php
if( ! function_exists( 'better_comments' ) ):
function better_comments($comment, $args, $depth) {
    ?>

<!-- comment -->

<div
    class="comment flex-col w-full py-4 mx-auto mt-3 bg-white border border-gray-200 sm:px-4 sm:py-4 md:px-4 sm:rounded-lg sm:shadow-sm ">
    <div class="flex flex-row md-10">


        <img class="w-12 h-12 border-2 border-gray-300 rounded-full" alt="Avatar"
            src="<?php echo get_avatar_url($comment,$size='80',$default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g' ); ?>">
        <div class="flex-col mt-1">
            <div class="flex items-center flex-1 px-4 font-bold leading-tight">
                <?php echo get_comment_author() ?>
                <span class="ml-2 text-xs font-normal text-gray-500">
                    <?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , '5balloons_theme'), get_comment_date(),  get_comment_time()) ?>
                </span>
            </div>
            <?php if ($comment->comment_approved == '0') : ?>
            <em>
                <?php esc_html_e('Your comment is awaiting moderation.','5balloons_theme') ?>
            </em>
            <br />
            <?php endif; ?>
            <div class="flex-1 px-2 ml-2 text-sm font-medium leading-loose text-gray-600">
                <?php comment_text() ?>
            </div>
            <div class="px-2 ml-2 mt-4 font-medium"><a href="#"><i class="fa fa-reply"></i>
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </a></div>


        </div>
    </div>

    <!-- end comment -->

    <?php } endif; ?>