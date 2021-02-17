<?php
/**
 * Template Name: Creative Requests Main Template
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-bar creativeRequests">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="large columns">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/were-creative-text.svg" alt="we're creative" /></h1>
        <h4 class="blue-text text-centered"><strong>We want to help you.</strong> What can we do for you?</h4>
        <h5 class="white-text text-centered">To help us better understand how we can help you please use the links below to submit your creative team requests. The information provided will be sent to <span class="blue-text">the Creative Team</span>. If you do not receive a confirmation within 1 business day of form submission please contact <span class="blue-text">Paul Principato</span>, with any concerns.</h5>
      </div>
    </div>
    <div class="row">
      <div class="small-6 medium-3 columns">
        <h6 class="text-center"><a href="/creative/studio/" target="_top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/studio-request-icon.svg" /></a> Internal Studio Request</h6>
      </div>
      <div class="small-6 medium-3 columns">
        <h6 class="text-center"><a href="/creative/print/" target="_top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/print-request-icon.svg" /></a> Print Request</h6>
      </div>
      <div class="small-6 medium-3 columns">
        <h6 class="text-center"><a href="/creative/creative/" target="_top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/creative-request-icon.svg" /></a> Creative Request</h6>
      </div>
      <div class="small-6 medium-3 columns">
        <h6 class="text-center"><a href="/salesagenda/" target="_top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/agenda-request-icon.svg" /></a> Agenda Request</h6>
      </div>
    </div>
  </section>
</div>

<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
