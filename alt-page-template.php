<?php
/*
Template Name: Alt Page Template
*/
?>
<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php get_template_part( 'template-parts/interior/banner', 'page' ); ?>
				<div class="alt page container">
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

							<header class="entry-header">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</header><!-- .entry-header -->

							<?php
							if(get_field('sub_title'))
							{
								echo '<h2 class="sub-title">' . get_field('sub_title') . '</h2>';
							}
							?>

							<div class="row">
								<div class="col-md-6">
									<?php
									while ( have_posts() ) : the_post();

										get_template_part( 'template-parts/alt-content', 'page' );

										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;

									endwhile; // End of the loop.
									?>
									<?php get_template_part( 'template-parts/interior/case-study', 'page' ); ?>
								</div>
								<div class="col-md-6">
									<?php the_field('second_column'); ?>
								</div>
							</div>

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
