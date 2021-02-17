<?php
/**
 * Template Name: Support Requests NAO Support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-title support-contact-header">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="small-6 medium-4 medium-offset-6 columns">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/nao-request-form-logo.svg" alt-="NAO Support Request" /></h1>
      </div>
    </div>
  </section>
</div>

<div class="header-title grid-container-fluid">
  <section class="container">
    <div class="row">
      <div class="medium-8 medium-offset-2 columns">
        <h5 class="margin-bottom white-text">Please be aware that submission of this form is NOT confirmation of the issue resolution. The information provided will be sent to Tech Support for review and it will be handled in the order in which it comes in.</h5>
        <script type="text/javascript" >document.write('<script src="http' + ( ("https:" == document.location.protocol) ? "s" : "") + '://www.surveygizmo.com/s3/4292110/NAO-Support-Request-Form?__no_style=true&__output=embedjs&__ref=' + escape(document.location.origin + document.location.pathname) + '" type="text/javascript" ></scr' + 'ipt>');</script><noscript><a href="https://www.surveygizmo.com/survey-blog/where-do-i-find-people-to-take-my-survey/">Take My Survey</a> This is the best way to get survey responses. <a href="https://www.surveygizmo.com/s3/4292110/NAO-Support-Request-Form?__no_style=true&?jsfallback=true">Please take my survey now</a></noscript>
      </div>
    </div>
  </section>
</div>


<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
