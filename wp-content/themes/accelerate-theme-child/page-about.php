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
				
			<ul class="our-services">
				<?php query_posts('post_type=services'); ?>
					<?php while (have_posts() ) : the_post(); 
						$service_icon = get_field("service_icon");
					?>
						<li>
							<?php echo wp_get_attachment_image($service_icon); ?>
							<h3><?php the_title(); ?></h3>
							<p><?php the_content(); ?></p>
						</li>
					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>
	</section>

<?php get_footer(); ?>