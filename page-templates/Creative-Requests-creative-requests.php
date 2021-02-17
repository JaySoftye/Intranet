<?php
/**
 * Template Name: Creative Requests Creative Requests
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-title createRequests">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="small-6 columns">
        <h1 class="white-text"><strong>Creative</strong><br />Design</br /><strong>Request<strong></h1>
      </div>
      <div class="small-6 columns">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lets-create-something-together.svg" /></h3>
      </div>
    </div>
  </section>
</div>

<div class="header-title grid-container-fluid">
  <section class="container">
    <div class="row">
      <div class="medium-10 columns hs-form">
        <h5 class="margin-bottom white-text">The Creative Department is 100% dedicated to helping your serve your customer's better and increasing revenue for Teq. Whether you have an idea regarding marketing material, website ideas, video team projects, we'd love to hear from you.</h5>
        <a href="mailto:paulprincipato@teq.com"><button class="button">Submit Your Creative Request</button></a>
        <label class="blue-text">All requests will be reviewed in the order they come in. Use the button below to email us directly</label>
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
