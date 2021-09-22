<div class="my-20 flex flex-col items-center justify-center p-10 mx-auto lg:flex-row lg:max-w-6xl lg:p-0">
	<div
		class="container relative z-20 flex flex-col w-full px-5 pb-1 pr-12 mb-16 text-2xl text-gray-700 lg:w-1/2 sm:px-0 md:px-10 sm:items-center lg:items-start lg:mb-0">
		<h1
			class="relative z-20 text-6xl font-bold leading-none text-primary-900 xl:text-6xl sm:text-center lg:text-left">
			<?php the_field('hero_title'); ?>
		</h1>
		<p class="relative z-20 block mt-6 text-base text-primary-700 text-lg xl:text-xl sm:text-center lg:text-left">
			<?php the_field('hero_subtitle'); ?>
		</p>
		<div class="relative flex mt-4">
			<a href="<?php the_field('hero_cta_url'); ?>"
				class="flex items-center self-start justify-center px-5 py-3 mt-5 text-base font-medium leading-tight text-white transition duration-150 ease-in-out bg-primary-500 border border-transparent rounded-full shadow hover:bg-primary-600 focus:outline-none focus:border-purple-600 focus:shadow-outline-purple md:py-4 md:text-lg xl:text-xl md:px-10">
				<?php the_field('hero_cta_label'); ?>
			</a>

		</div>
	</div>
	<div class="relative w-full px-5 rounded-lg cursor-pointer md:w-2/3 lg:w-1/2 group xl:px-0">
		<div class="absolute top-0 left-0 w-11/12 -mt-20 opacity-50">
			<svg class="w-full h-full ml-4 text-purple-100" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
				<path fill="currentColor"
					d="M45,-78C58.3,-70.3,69,-58.2,75.2,-44.4C81.3,-30.7,82.9,-15.3,83.5,0.4C84.2,16,83.8,32.1,76.5,43.9C69.2,55.7,55.1,63.3,41.2,69.4C27.3,75.4,13.6,80,-0.7,81.2C-15.1,82.5,-30.1,80.3,-41.2,72.6C-52.2,64.9,-59.2,51.6,-67.1,38.5C-75.1,25.5,-83.9,12.8,-83.8,0C-83.8,-12.7,-74.9,-25.4,-65.8,-36.4C-56.7,-47.4,-47.4,-56.7,-36.4,-65.7C-25.4,-74.7,-12.7,-83.5,1.6,-86.2C15.9,-89,31.8,-85.7,45,-78Z"
					transform="translate(100 100)" />
			</svg>
		</div>
		<div class="relative overflow-hidden rounded-md shadow-2xl cursor-pointer group">

        <?php
            
            $hero_thumbnail_url = get_template_directory_uri() . '/images/placeholder.png';

            if (!empty(get_field('hero_image'))) {
                $hero_thumbnail_url = get_field('hero_image');
            }

        ?>
			<img src="<?php echo $hero_thumbnail_url; ?>"
				class="z-10 object-cover w-full h-full">
		</div>
	</div>
</div>