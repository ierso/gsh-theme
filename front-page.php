<?php
/**
 * The template for displaying front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gsh
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'template-parts/home/slider', 'page' ); ?>

			<?php get_template_part( 'template-parts/home/page-nav', 'page' ); ?>

			<?php get_template_part( 'template-parts/home/content', 'page' ); ?>

			<?php get_template_part( 'template-parts/home/banner-top', 'page' ); ?>

			<?php get_template_part( 'template-parts/home/icon-cat', 'page' ); ?>

			<?php

			$bannerBottom = get_field('banner_bottom');

			if( !empty($bannerBottom) ): ?>

			<section id="tailored-services" class="full-cat-front" style="background-image: url( <?php echo $bannerBottom['url']; ?>)">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>Tailored services &amp; innovative solutions that<br> let you focus on what you do best</h2>
							<a href="/services-overview/" class="btn btn-primary blue">Read More</a>
						</div>
					</div>
				</div>
			</section>

			<?php endif; ?>

			<?php get_template_part( 'template-parts/home/env-management', 'page' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
