<?php
/**
 * Template Name: Marketing Requests Campaign Requests
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-title marketing-vendor-leads-header">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="large-8 columns">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/campaign-request.svg" alt-="Campaign Requests" /></h1>
      </div>
    </div>
  </section>
</div>

<div class="header-title grid-container-fluid">
  <section class="container">
    <div class="row">
      <div class="medium-10 columns">
        <h5 class="margin-bottom white-text">The Marketing Department is 100% dedicated to helping engage your customer's better and increasing revenue for Teq. Whether you have an idea regarding marketing material, campaign launch, or just want to say hi, we'd love to hear from you. Use the button below to email us directly.</h5>
        <a href="mailto:paulprincipato@teq.com"><button class="button">Submit Your Request</button></a>
        <label class="blue-text">Please note that all requests will be reviewed in the order they come in.</label>
      </div>
    </div>
    <div class="row">
      <div class="large columns">

      </div>
    </div>
  </section>
</div>


<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
