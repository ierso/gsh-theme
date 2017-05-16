<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gsh
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php get_template_part( 'template-parts/interior/banner', 'page' ); ?>
				<div class="page container">
					<div class="row">
						<div class="col-md-3">
							<?php get_template_part( 'template-parts/interior/sidebar-nav', 'page' ); ?>
							<?php if ( ! dynamic_sidebar('Connect With Us') ) : ?>
							<!-- This will output the connect with us widget -->
							<?php endif; ?>
						</div>
						<div class="col-md-9">
							<div class="bread-crumbs">
								<?php cory_krumbz(); ?>
							</div>
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>

							<?php get_template_part( 'template-parts/interior/case-study', 'page' ); ?>

							<?php get_template_part( 'template-parts/interior/slide-down', 'page' ); ?>

							<?php get_template_part( 'template-parts/interior/post-and-nav', 'page' ); ?>

						</div>
					</div>

				</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
