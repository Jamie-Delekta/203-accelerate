<?php
/**
 * The template for displaying the About Page
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

<div id="primary" class="about-page hero-content">
	<div class="main-content" role="main">
	
		
	
		<?php while ( have_posts() ) : the_post(); 
				$about_us = get_field('about_us');
				$title = get_field('title');
				$services = get_field('services');
				$image_1 = get_field('image_1');
				$heading_1 = get_field('heading_1');
				$paragraph_1 = get_field('paragraph_1');
				$image_2 = get_field('image_2');
				$heading_2 = get_field('heading_2');
				$paragraph_2 = get_field('paragraph_2');
				$image_3 = get_field('image_3');
				$heading_3 = get_field('heading_3');
				$paragraph_3 = get_field('paragraph_3');
				$image_4 = get_field('image_4');
				$heading_4 = get_field('heading_4');
				$paragraph_4 = get_field('paragraph_4');
				$heading_5 = get_field('heading_5');
				$contact = get_field('contact');
				$size = "small";
			?>

<p><?php echo $about_us; ?></p>

</div><!-- .main-content -->

</div><!-- #primary -->

			<article class="about-page">
				<aside class="about-page-sidebar">
					<?php the_content(); ?>
			<div class="services">
					<h2><?php the_title(); ?></h2>
					<p><?php echo $services; ?></p>
			</div>
			<div class="content-strategy"> 
				<?php if($image_1) {
					echo wp_get_attachment_image($image_1, $size);
				} ?>
					<h3><?php echo $heading_1; ?></h3>
					<p><?php echo $paragraph_1; ?></p>
			</div>
			<div class="influencer-mapping">
				<?php if($image_2) {
					echo wp_get_attachment_image($image_2, $size);
				} ?>
					<h3><?php echo $heading_2; ?></h3>
					<p><?php echo $paragraph_2; ?></p>
			</div>
			<div class="social-strategy">
				<?php if($image_3) {
					echo wp_get_attachment_image($image_3, $size);
				} ?>
					<h3><?php echo $heading_3; ?></h3>
					<p><?php echo $paragraph_3; ?></p>
			</div>
			<div class="design">
				<?php if($image_4) {
					echo wp_get_attachment_image($image_4, $size);
				} ?>
					<h3><?php echo $heading_4; ?></h3>
					<p><?php echo $paragraph_4; ?></p>
			</div>
			<h5><?php echo $heading_5; ?></h5>
				<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
				</aside>

				

			</article>
                

				    
		<?php endwhile; // end of the loop. ?>
	

<?php get_footer(); ?>