<?php
/* Template Name: About Template
 * The template for displaying about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

	<section class="featured-services">
		<div class="site-content">
			<h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p>	
			<div class="services-wrapper">
				<ul>
				<?php query_posts('post_type=services&order=ASC'); ?>
					<?php while (have_posts() ) : the_post(); 
						$service_icon = get_field("service_icon");
						$size ="small";
					?>				
					<li class="service-line">
						<div>
							<figure><?php echo wp_get_attachment_image($service_icon, $size); ?>
							</figure>
						</div>
						<div class="service-detail">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
					</li>
					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				</ul>
			</div>

			<div class="about-contact">
					<div class="about-contact-h2"> 
						<h2>Interested in working with us?</h2>
					</div>
					<div>
						<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
					</div>
			</div>		

		</div>

	</section>

<?php get_footer(); ?>