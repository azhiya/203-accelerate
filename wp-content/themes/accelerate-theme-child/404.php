<?php
/**
 * The 404 page
 *
 * This is the 404 error page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
		</div><!-- .main-content -->

	</div><!-- #primary -->

    <section>
    <div class="site-content">
        <div class="funny-box">
            <div style="width:100%;height:0;padding-bottom:75%;position:relative;">
                <iframe src="https://giphy.com/embed/kQbMO5X7UA1C8" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
            </div>
            <p><a href="https://giphy.com/gifs/kQbMO5X7UA1C8" target="_BLANK">via GIPHY</a></p>
        </div>
        
        <div class="serious-box">
            <h1>Oops! We can't find that page....</h1>
            <p>Sorry for that. Feel free to take a look around our <a href="<?php echo site_url('/blog/') ?>">blog</a> or some of our <a href="<?php echo site_url('/case-studies/') ?>">featured work</a>.</p>
        </div>
    </section>

<?php get_footer(); ?>