<div class="border shadow-sm rounded p-8 h-full bg-white-transparent">
    <div class="flex flex-col">
        <div class="mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" style="color: <?php echo $args['icon_color']; ?>;" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
        </div>
        <h3 class="font-semibold text-base text-cool-gray-700 mb-2">
            <?php the_title(); ?>
        </h3>
        <div class="text-sm text-cool-gray-600 leading-6">
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>