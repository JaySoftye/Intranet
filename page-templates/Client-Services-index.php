<?php
/**
 * Template Name: Client Services Main Template
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-bar pdRequests">

  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>
  <section class="container">
    <div class="row">
      <div class="column small-12">
        <h1 class="white-text text-center"><strong>Client</strong> Services</h1>
      </div>
    </div>
    <div class="row">
      <div class="columns">
        <div class="column small-12 medium-4 medium-offset-4">
          <div class="search-field-container">
            <form role="search" method="get" id="search-field" action="<?php echo home_url( '/' ); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/search-icon.svg" id="search-icon" alt="Search" />
              <input type="hidden" value="client-services" name="category_name" />
              <input class="search-input" value="" name="s" id="s" placeholder="Type search term and press enter" type="text">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br /><br />
  <section class="container padding-bottom">
    <div class="row">
      <div class="column small-centered small-12 medium-12">
        <div class="row text-center">
          <div class="columns small-6 medium-2 category-link">
            <a href="/client-services/rma-process"><img src="<?php echo get_template_directory_uri(); ?>/images/sales-assistance-forms-icon.svg" /><span>RMA Process</span></a>
          </div>
          <div class="columns small-6 medium-2 category-link">
            <a href="/client-services/loyalty"><img src="<?php echo get_template_directory_uri(); ?>/images/sales-assistance-forms-icon.svg" /><span>Loyalty<br /></span></a>
          </div>
          <div class="columns small-6 medium-2 category-link">
            <a href="/client-services/sca-stem-templates"><img src="<?php echo get_template_directory_uri(); ?>/images/sales-assistance-forms-icon.svg" /><span>SCA STEM Templates</span></a>
          </div>
          <div class="columns small-6 medium-2 category-link">
            <a href="/client-services/trial-forms"><img src="<?php echo get_template_directory_uri(); ?>/images/sales-assistance-forms-icon.svg" /><span>Trial<br />Forms</span></a>
          </div>
          <div class="columns small-6 medium-2 category-link">
            <a href="/client-services/company-processes"><img src="<?php echo get_template_directory_uri(); ?>/images/sales-assistance-forms-icon.svg" /><span>Company Processes</span></a>
          </div>
          <div class="columns small-6 medium-2 category-link">
            <a href="/client-services/client-service-executive-manual"><img src="<?php echo get_template_directory_uri(); ?>/images/sales-assistance-forms-icon.svg" /><span>Executive Manual</span></a>
          </div>
          <div class="columns small-6 medium-2 category-link">
            <a href="/client-services//client-services-templates"><img src="<?php echo get_template_directory_uri(); ?>/images/sales-assistance-forms-icon.svg" /><span>Client Services Templates</span></a>
          </div>
          <div class="columns small-6 medium-2 category-link">
            <a href="/client-services/iblock-process"><img src="<?php echo get_template_directory_uri(); ?>/images/sales-assistance-forms-icon.svg" /><span>iBlock Process</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>


<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
