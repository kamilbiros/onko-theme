<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onko-theme
 */

?>

<?php wp_footer(); ?>

<!-- Portfolio Modals -->
<?php $loop = new WP_Query(array('post_type'=>'portfolio', 'order_by'=>
    'post_id','order'=>'ASC'))?>
<?php while($loop->have_posts()):
$loop->the_post();
?>
<!-- Portfolio Modal 1 -->


  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolio-modal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php the_title(); ?></h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="<?php the_post_thumbnail_url(); ?>" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"><?php the_content(); ?></p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




<?php endwhile; ?>



	<!-- Bootstrap core JavaScript -->
	<script src="<?php bloginfo('stylesheet_directory')?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="<?php bloginfo('stylesheet_directory')?>/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Contact Form JavaScript -->
	<script src="<?php bloginfo('stylesheet_directory')?>/js/jqBootstrapValidation.js"></script>
	<script src="<?php bloginfo('stylesheet_directory')?>/js/contact_me.js"></script>

</body>
</html>
