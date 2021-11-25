</main>

<?php do_action( 'lalokalabscorp_content_end' ); ?>

</div>

<?php do_action( 'lalokalabscorp_content_after' ); ?>

<!-- simple footer -->

<footer class="text-white bg-cool-gray-900">
	<div class="container px-4 mx-auto flex flex-col sm:flex-row items-center py-10">
		<!-- company info -->
		<div class="w-72 border-cool-gray-600 border-t sm:border-t-0 sm:border-r sm:pr-10 order-last sm:order-first mt-8 sm:mt-0 pt-4 sm:pt-0">
			<div class="text-center md:text-left">
				<a class="flex items-center justify-center text-base font-medium title-font md:justify-start mt-4">
					&copy; <?php echo date_i18n( 'Y' );?> LaLoka Labs OÜ
				</a>
				<p class="text-xs mt-0.5">Sepapaja 6, Tallinn 15551, Estonia</p>
			</div>

			<div class="text-center md:text-left">
				<a class="flex items-center justify-center text-base font-medium title-font md:justify-start mt-4">
					&copy; <?php echo date_i18n( 'Y' );?> LaLoka Labs LLC
				</a>
				<p class="text-xs mt-0.5">1-9-4 Taito, Matsuura Bldg 5F, Taito-Ku, Tokyo 110-0016, Japan</p>
			</div>
		</div>
		<!-- end company info -->
		<!-- footer menu -->
		<?php
			wp_nav_menu(
				array(
					'container_id'    => 'footer-menu',
					'container_class' => 'flex-1 my-6 md:my-0 p-0 md:pl-12',
					'menu_class'      => 'flex flex-col lg:flex-row text-center md:text-left space-y-4 lg:space-y-0',
					'theme_location'  => 'footer',
					'li_class'        => 'md:mr-6 text-gray-300 hover:text-white font-medium text-sm',
					'fallback_cb'     => false,
				)
			);
			?>
		<!-- end footer menu -->
		<!-- social link -->
		<div class="flex items-center space-x-7">
			<!-- mail -->
			<a href="mailto:hello@lalokalabs.co" class="cursor-pointer text-gray-300 hover:text-white">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
				<path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
				<path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
				</svg>
			</a>
			<!-- twitter -->
			<a href="https://twitter.com/lalokalabs" class="cursor-pointer text-gray-300 hover:text-white">
				<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					class="w-7 h-7" viewBox="0 0 24 24">
					<path
						d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
					</path>
				</svg>
			</a>
			<!-- linkedin -->
			<a href="https://www.linkedin.com/company/laloka-labs/" class="cursor-pointer text-gray-300 hover:text-white">
				<svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
					stroke-linejoin="round" stroke-width="0" class="w-7 h-7" viewBox="0 0 24 24">
					<path stroke="none"
						d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
					</path>
					<circle cx="4" cy="4" r="2" stroke="none"></circle>
				</svg>
			</a>
		</div>
		<!-- end social link -->
	</div>
</footer>

<!-- end simple footer -->

</div>

<?php wp_footer(); ?>

</body>

</html>