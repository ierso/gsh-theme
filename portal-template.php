<?php
/*
Template Name: Portal Template
*/
?>
<?php
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

						<?php if ( post_password_required() ) : ?>

							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12">

										<?php
										while ( have_posts() ) : the_post();

											get_template_part( 'template-parts/content', 'page' );

											// If comments are open or we have at least one comment, load up the comment template.
											if ( comments_open() || get_comments_number() ) :
												comments_template();
											endif;

										endwhile; // End of the loop.
										?>

									</div>
								</div>
							</div>
						<?php else : ?>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12">

										<?php
										while ( have_posts() ) : the_post();

											get_template_part( 'template-parts/content', 'page' );

											// If comments are open or we have at least one comment, load up the comment template.
											if ( comments_open() || get_comments_number() ) :
												comments_template();
											endif;

										endwhile; // End of the loop.
										?>

									</div>
								</div>
						  <?php get_template_part( 'template-parts/page/portal', 'page' ); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
