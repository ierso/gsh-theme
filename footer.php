<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gsh
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="ft-logo">
						<img id="logo" src="<?php bloginfo('template_directory'); ?>/img/footer/footer-logo.svg" alt="footer logo">
					</div>
					<div class="ft-green-logo">
						<img class="ft-logo-img" id="green-council" src="<?php bloginfo('template_directory'); ?>/img/footer/green-building-council.png" alt="iso certification">
					</div>
					<div class="ft-green-logo">
						<img class="ft-logo-img" id="iso" src="<?php bloginfo('template_directory'); ?>/img/footer/iso-cert.png" alt="green council member">
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<h3 class="ft-title">Connect</h3>
					<ul class="social-list">
						<li><a href="https://twitter.com/gshgroup"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="https://www.facebook.com/georgeshallinc/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://www.linkedin.com/company/6707762"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
					<h3 class="ft-title">Latest News</h3>
					<ul class="ft-list">
						<?php
							$args = array( 'numberposts' => '4' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
								echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
							}
							wp_reset_query();
						?>
					</ul>
				</div>
				<div class="col-md-3 col-sm-12">
					<h3 class="ft-title">Contact Us</h3>
					<ul id="ft-info" class="ft-list">
						<li id="ft-site"><img src="<?php bloginfo('template_directory'); ?>/img/footer/profile.svg" alt="profile">GSH</li>
						<li id="ft-num"><img src="<?php bloginfo('template_directory'); ?>/img/footer/phone.svg" alt="phone">U.S. 877-447-4255</li>
						<li id="ft-num"><img src="<?php bloginfo('template_directory'); ?>/img/footer/phone.svg" alt="phone">Int. 001-877-447-4255</li>
						<li id="ft-contact"><img src="<?php bloginfo('template_directory'); ?>/img/footer/location.svg" alt="contact">George S. Hall Inc.<br>
							<div class="ft-move">
								GSH Group Headquarters<br>
								Four Gatehall Drive<br>
								2nd Floor<br>
								Parsippany, NJ 07054
							</div>
						</li>
						<li id="ft-reach"><img src="<?php bloginfo('template_directory'); ?>/img/footer/mail.svg" alt="mail"><a  href="mailto:info@GSHgroup.com">info@GSHgroup.com</a></li>
						<li id="ft-url"><img src="<?php bloginfo('template_directory'); ?>/img/footer/website.svg" alt="website"><a href="http://gshgroup.com/">www.GSHgroup.com</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-12">
					<h3 class="ft-title">Site Map</h3>
					<?php wp_nav_menu( array( 'theme_location' => 'site-menu' ) ); ?>
				</div>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
