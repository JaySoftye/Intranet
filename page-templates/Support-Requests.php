<?php
/**
 * Template Name: Support Requests Main Template
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-bar supportRequests">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="large columns padding">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/teq-support-and-service.svg" alt="Support and Service" /></h1>
        <h5 class="white-text text-centered">Our exceptional support and service programs combine both <span class="blue-text">in-person and remote aid</span>.<br /> Our specialists can provide your teachers and school with the technology to drive student engagement.</h5>
      </div>
    </div>
    <div class="row">
      <div class="row">
        <div class="small-6 medium-3 medium-offset-3 columns">
          <h6 class="text-center"><a href="/support/internal-support-request/" target="_top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/teq-support-internal-request-icon.svg" /></a> Contact Teq Support</h6>
        </div>
        <div class="small-6 medium-3 columns">
          <h6 class="text-center"><a href="/support/nao-support-request/" target="_top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/teq-support-aldebaran-request-icon.svg" /></a> NAO Request Form</h6>
        </div>
      </div>
    </div>
  </section>
</div>

<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
