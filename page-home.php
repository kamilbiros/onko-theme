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

<?php
// get_sidebar();
get_footer();
