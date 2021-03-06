<?php
/*
 Template Name: Home Page
*/

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biros-theme
 */

get_header();

$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>

<header class="masthead bg-primary text-white text-center">
	<div class="container d-flex align-items-center flex-column">

		<!-- Masthead Avatar Image -->
		<img class="masthead-avatar mb-5" src="<?php echo $image[0] ?>" alt="">

		<!-- Masthead Heading -->
		<h1 class="masthead-heading text-uppercase mb-0"><?php bloginfo('name') ?></h1>

		<!-- Icon Divider -->
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon">
				<i class="fas fa-star"></i>
			</div>
			<div class="divider-custom-line"></div>
		</div>

		<!-- Masthead Subheading -->
		<p class="masthead-subheading font-weight-light mb-0"><?php bloginfo('description') ?></p>

	</div>
</header>


<!-- PORTFOLIO SECTION -->
<section class="page-section portfolio" id="portfolio">
	<div class="container">

		<!-- Portfolio Section Heading -->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

		<!-- Icon Divider -->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon">
				<i class="fas fa-star"></i>
			</div>
			<div class="divider-custom-line"></div>
		</div>

		<!-- Portfolio Grid Items -->
		<div class="row">
			<?php $loop = new WP_Query(array('post_type'=>'portfolio', 'order_by'=>'post_id','order'=>'ASC'));?>
            <?php while($loop->have_posts()) : $loop->the_post();?>
                <div class="col-md-6 col-lg-4">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolio-modal-<?php the_ID(); ?>">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white">
							    <i class="fas fa-plus fa-3x"></i>
							</div>
						</div>
						<img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
					</div>
		        </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<!-- EOF PORTFOLIO SECTION -->
<!-- ABOUT SECTION -->
<?php
$about_section_left = get_field('about_text_left');
$about_section_right = get_field('about_text_right');
$about_button_text = get_field('button_text');
$about_button_link = get_field('button_field_link');
?>

<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead"><?php echo $about_section_left; ?></p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead"><?php echo $about_section_right; ?></p>
        </div>
      </div>

      <!-- About Section Button -->
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="<?php echo $about_button_link; ?>">
          <i class="fas fa-download mr-2"></i>
          <?php echo $about_button_text; ?>
        </a>
      </div>

    </div>
  </section>

<!-- EOF ABOUT SECTION -->
<!-- CONTACT SECTION -->
<section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>

		<!-- Icon Divider -->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon">
				<i class="fas fa-star"></i>
			</div>
			<div class="divider-custom-line"></div>
		</div>
		<div class="row">
        	<div class="col-lg-8 mx-auto">

				<?php echo do_shortcode( '[contact-form-7 id="99" title="Contact"]') ?>

			</div>
		</div>
    </div>
</section>
<!-- EOF CONTACT SECTION -->

<?php
$footer_location_header = get_field('footer_location_header');
$footer_location_details = get_field('footer_location_details');
$footer_social_header = get_field('footer_social_header');
$footer_about_header = get_field('footer_about_header');
$footer_about_details = get_field('footer_about_details');
$footer_about_link_text = get_field('footer_about_link_text');
$footer_about_link_url = get_field('footer_about_link_url');
?>
<footer class="footer text-center">
    <div class="container">
		<div class="row">

		<!-- Footer Location -->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4"><?php echo $footer_location_header ?></h4>
				<p class="lead mb-0"><?php echo $footer_location_details ?></p>
			</div>

			<!-- Footer Social Icons -->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4"><?php echo $footer_social_header ?></h4>
				<a class="btn btn-outline-light btn-social mx-1" href="#">
					<i class="fab fa-fw fa-facebook-f"></i>
				</a>
				<a class="btn btn-outline-light btn-social mx-1" href="#">
					<i class="fab fa-fw fa-twitter"></i>
				</a>
				<a class="btn btn-outline-light btn-social mx-1" href="#">
					<i class="fab fa-fw fa-linkedin-in"></i>
				</a>
				<a class="btn btn-outline-light btn-social mx-1" href="#">
					<i class="fab fa-fw fa-dribbble"></i>
				</a>
			</div>

			<!-- Footer About Text -->
			<div class="col-lg-4">
				<h4 class="text-uppercase mb-4"><?php echo $footer_about_header ?></h4>
				<p class="lead mb-0"><?php echo $footer_about_details ?>
				<a href="<?php echo $footer_about_link_url ?>"><?php echo $footer_about_link_text ?></a>.</p>
			</div>

		</div>
	</div>
</footer>

<section class="copyright py-4 text-center text-white">
    <div class="container">
    	<small>Copyright &copy;<?php echo bloginfo('name') ?> <?php echo date('Y') ?></small>
    </div>
</section>


	<!-- <div id="primary" class="content-area"> -->
		<!-- <main id="main" class="site-main"> -->

		<?php
		// while ( have_posts() ) :
			// the_post();

			// get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
				// comments_template();
			// endif;

		// endwhile; // End of the loop.
		?>

		<!-- </main>#main -->
	<!-- </div>#primary -->

<?php
// get_sidebar();

get_footer();
