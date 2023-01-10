<?php

/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= (true === get_theme_mod('display_title_and_tagline', true)) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu('primary') ? ' has-menu' : '';
?>

<header id="masthead">
	<div class="header">
		<div class="l-header__head">

			<div class="header__logo">
				<a href="#">
					<picture>
						<img src="http://demo.test/wp-content/uploads/2023/01/logo.png" alt="EO Hokkaido" class="logo">
					</picture>
				</a>
			</div>

			<div class="header__bar">
				<ul class="nav-bar">
					<li class="nav-bar__item">Activity</li>
					<li class="nav-bar__item">Member</li>
					<li class="nav-bar__item">News</li>
					<li class="nav-bar__item">join Us</li>
					<li class="nav-bar__item">Contact</li>
				</ul>
				<div class="map">
					<p class="map__btn">JAPAN <i class="fa-solid fa-location-dot ps-2"></i></p>
				</div>
				<div class="header__toggle">
					<button class="toggle">
						<span class="toggle__bar toggle__bar--1"></span>
						<span class="toggle__bar toggle__bar--2"></span>
						<span class="toggle__bar toggle__bar--3"></span>
					</button>
				</div>
			</div>
		</div>
		<div class="side-bar d-none">
			<ul class="nav-bar">
				<li class="nav-bar__item">Activity</li>
				<li class="nav-bar__item">Member</li>
				<li class="nav-bar__item">News</li>
				<li class="nav-bar__item">join Us</li>
				<li class="nav-bar__item">Contact</li>
			</ul>
		</div>
		<div class="mini-map d-none">
			<div class="mini-map-content">
				<div class="mini-map__img">
					<picture>
						<img class="mini-map-s" src="http://demo.test/wp-content/uploads/2023/01/map_S.png" alt="map">
						<img class="mini-map-l" src="http://demo.test/wp-content/uploads/2023/01/map_L.png" alt="map">
					</picture>
				</div>
				<div class="mini-map__list-item">
					<div class="box-item">
						<div id="box-item-01" class="mini-map__item">
							<div class="box-head text-center">GLOBAL</div>
							<a href="#">Tokyo Metropolitan</a>
						</div>
						<div id="box-item-02" class="mini-map__item">
							<div class="box-head text-center">北 日 本</div>
							<a href="#">North Japan</a>
						</div>
						<div id="box-item-03" class="mini-map__item">
							<div class="box-head text-center">関　東</div>
							<a href="#">Tokyo Central</a>
							<a href="#">Tokyo Platinum</a>
							<a href="#">Tokyo West</a>
						</div>
						<div id="box-item-04" class="mini-map__item">
							<div class="box-head text-center">中　部</div>
							<a href="#">Nagoya</a>
						</div>
						<div id="box-item-05" class="mini-map__item">
							<div class="box-head text-center">近　畿</div>
							<a href="#">Osaka</a>
							<a href="#">Kyoto</a>
						</div>
						<div id="box-item-06" class="mini-map__item">
							<div class="box-head text-center">中 国 / 四 国</div>
							<a href="#">Setouchi</a>
						</div>
						<div id="box-item-07" class="mini-map__item">
							<div class="box-head text-center">九　州</div>
							<a href="#">Fukuoka</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</header><!-- #masthead -->