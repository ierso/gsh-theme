<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gsh
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="page-banner post-banner"></div>
			<div class="page container">
				<div class="row">
					<div class="col-md-3">
						<?php get_sidebar(); ?>
						<?php get_template_part( 'template-parts/interior/sidebar-nav', 'page' ); ?>
						<?php if ( ! dynamic_sidebar('Connect With Us') ) : ?>
						<!-- This will output the connect with us widget -->
						<?php endif; ?>
					</div>
					<div class="col-md-9">
						<div class="bread-crumbs">
							<a href="/news">News</a> >
						</div>

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content-index', get_post_format() );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
