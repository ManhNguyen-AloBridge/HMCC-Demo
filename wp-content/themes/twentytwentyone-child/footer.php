<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer-widgets'); ?>

<div class="sns">
	<a href="https://www.facebook.com/EOHokkaido"  class="sns__item">
		<img src="http://demo.test/wp-content/uploads/2023/01/facebook.png" alt="facebook" class="sns__img">
	</a>
	<a href="https://twitter.com/EO_Hokkaido"  class="sns__item ms-4">
		<img src="http://demo.test/wp-content/uploads/2023/01/twitter.png" alt="twitter" class="sns__img">
	</a>
	<a href="https://www.linkedin.com/company/eohokkaido/?original_referer=https%3A%2F%2Feohokkaido.org%2F"  class="sns__item ms-4">
		<img src="http://demo.test/wp-content/uploads/2023/01/linkedin.png" alt="linkedin" class="sns__img">
	</a>

</div>



<footer class="global-footer">
	<div class="global-footer__inner l-wrap">
		<div class="global-footer__eo">
			<p class="logo">
				<a href="#">
					<picture>
						<img src="http://demo.test/wp-content/uploads/2023/01/footer_logo.png" alt="EO JAPAN" height="24.5" width="96">
					</picture>
				</a>
			</p>

			<div class="global-footer__companies">
				<p class="companies">
					<a href="#" class="companies__item"><span class="companies__icon">▼</span>North Japan</a>
					<a href="#" class="companies__item"><span class="companies__icon">▼</span>Tokyo Central</a>
					<a href="#" class="companies__item"><span class="companies__icon">▼</span>Tokyo West</a>
					<a href="#" class="companies__item"><span class="companies__icon">▼</span>Nagoya</a>
				</p>
				<p class="companies">
					<a href="#" class="companies__item"><span class="companies__icon">▼</span>Osaka</a>
					<a href="#" class="companies__item"><span class="companies__icon">▼</span>Kyoto</a>
					<a href="#" class="companies__item"><span class="companies__icon">▼</span>Setouchi</a>
					<a href="#" class="companies__item"><span class="companies__icon">▼</span>Fukuoka</a>
				</p>
				<p class="companies">
					<a href="#" class="companies__item"><span class="companies__icon">▼</span>Tokyo Platinum</a>
					<a href="#" class="companies__item w-auto"><span class="companies__icon">▼</span>Tokyo Metropolitan</a>
				</p>
			</div>

			<div class="global-footer__world-map">
				<a href="#" target="blank" class="world-map__title">
					<div class="title">
						<div class="title__line first"></div>
						<div class="title__text">EO GLOBAL</div>
						<div class="title__line"></div>
					</div>
				</a>

				<a href="#" class="world-map">
					<picture>
						<img src="http://demo.test/wp-content/uploads/2023/01/map_world.png" alt="World map" width="100%">
					</picture>
				</a>

				<div class="world-map">

				</div>

			</div>
		</div>
		<div class="global-footer__btn">
			<a href="">
				<img src="http://demo.test/wp-content/uploads/2023/01/ft_gsea_pc.png" alt="" width="139" height="36">
				<span class="txt">学生起業家を対象とした世界的なアワード</span>
			</a>
		</div>
	</div>

	<p class="global-footer__copy-right text-center">Copyright 2022 Entrepreneurs’Organization Hokkaido All rights Reserved.</p>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>