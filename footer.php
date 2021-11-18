</main>

<?php do_action( 'lalokalabscorp_content_end' ); ?>

</div>

<?php do_action( 'lalokalabscorp_content_after' ); ?>

<!-- simple footer -->

<footer class="text-white bg-cool-gray-900">
	<div class="container mx-auto flex flex-col sm:flex-row items-center py-10">
		<!-- company info -->
		<div class="w-72 border-0 md:border-r border-cool-gray-600 p-0 md:pr-10">
			<div class="text-center md:text-left">
				<a class="flex items-center justify-center text-base font-medium title-font md:justify-start mt-4">
					&copy; <?php echo date_i18n( 'Y' );?> LaLoka Labs OÜ
				</a>
				<p class="text-xs">Sepapaja 6, Tallinn 15551, Estonia</p>
			</div>

			<div class="text-center md:text-left">
				<a class="flex items-center justify-center text-base font-medium title-font md:justify-start mt-4">
					&copy; <?php echo date_i18n( 'Y' );?> LaLoka Labs LLC
				</a>
				<p class="text-xs">1-9-4 Taito, Matsuura Bldg 5F, Taito-Ku, Tokyo 110-0016, Japan</p>
			</div>
		</div>
		<!-- end company info -->
		<!-- footer menu -->
		<?php
			wp_nav_menu(
				array(
					'container_id'    => 'footer-menu',
					'container_class' => 'flex-1 my-6 md:my-0 p-0 md:pl-16',
					'menu_class'      => 'flex flex-col md:flex-row text-center md:text-left',
					'theme_location'  => 'footer',
					'li_class'        => 'm-0 md:mr-6',
					'fallback_cb'     => false,
				)
			);
			?>
		<!-- end footer menu -->
		<!-- social link -->
		<div class="flex items-center space-x-6">
			<a class="hidden cursor-pointer hover:text-white">
					<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						class="w-5 h-5" viewBox="0 0 24 24">
						<path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
					</svg>
			</a>
			<!-- twitter -->
			<a href="https://twitter.com/lalokalabs" class="cursor-pointer hover:text-white">
				<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					class="w-5 h-5" viewBox="0 0 24 24">
					<path
						d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
					</path>
				</svg>
			</a>
			<!-- instagram -->
			<a class="hidden cursor-pointer hover:text-white">
				<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
					stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
					<rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
					<path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
				</svg>
			</a>
			<!-- linkedin -->
			<a href="https://www.linkedin.com/company/laloka-labs/" class="cursor-pointer hover:text-white">
				<svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
					stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
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