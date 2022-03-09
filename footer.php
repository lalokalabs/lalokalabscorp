</main>

<?php do_action( 'lalokalabscorp_content_end' ); ?>

</div>

<?php do_action( 'lalokalabscorp_content_after' ); ?>

<!-- simple footer -->

<footer class="text-white bg-cool-gray-900">
	<div class="container px-4 lg:px-14 mx-auto flex flex-col md:flex-row items-center py-10">
		<!-- company info -->
		<div class="w-72 border-cool-gray-600 border-t md:border-t-0 md:border-r md:pr-10 order-last md:order-first mt-8 md:mt-0 pt-4 md:pt-0">
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
			<!-- youtube -->
			<a href="https://www.youtube.com/channel/UCbY6Fri8mTYi8XG63SEpWXA" class="cursor-pointer text-gray-300 hover:text-white">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-7 h-7" viewBox="0 0 16 16">
				  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
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