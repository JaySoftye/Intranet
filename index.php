<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<main id="teq-intranet-content">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="large-6 medium-6 columns">
        <h1><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/teq-intranet-main-logo-text.svg" alt="Teq Intranet" /></h1>
        <h2>Accelerate your sales</h2>
        <h3><strong>Everything you need at your fingertips</strong></h3>
      </div>
    </div>
  </section>
</main>

<section class="container padding-top padding-bottom">
  <div class="row" style="height: 100%;">

    <div class="columns small-6 medium-3">
      <article class="card">
        <p class="text-center"><a href="http://sfs.teq.com/users/login"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/intranet-sfs-system.jpg" /> Sales Forecasting System (SFS)</a></p>
      </article>
    </div>
    <div class="columns small-6 medium-3">
      <article class="card">
        <p class="text-center"><a href="http://rus.teq.com/MyCalendar"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/intranet-rus-sales-system.jpg" /> Resource Utilization System (RUS)</a></p>
      </article>
    </div>
    <div class="columns small-6 medium-3">
      <article class="card">
        <p class="text-center"><a href="http://intranet.teq.com/sales/executive-team-bios/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/intranet-executive-team.jpg" /> Executive <br /> Team Bios</a></p>
      </article>
    </div>
    <div class="columns small-6 medium-3">
      <article class="card">
        <p class="text-center"><a href="https://www.teq.com/cdw-g-products/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/intranet-cdw-producs-index.jpg" /> CDW-G <br /> STEM Products</a></p>
      </article>
    </div>
    <div class="columns small-6 medium-3">
      <article class="card">
        <p class="text-center"><a href="http://intranet.teq.com/employee-handbook/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/intranet-employee-handbook.jpg" /> Teq Employee <br /> Handbook</a></p>
      </article>
    </div>
    <div class="columns small-6 medium-3">
      <article class="card">
        <p class="text-center"><a href="https://ace.myisolved.com/UserLogin.aspx"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/intranet-isolved-portal.jpg" /> myisolved <br /> company portal</a></p>
      </article>
    </div>
    <div class="columns small-6 medium-3">
      <article class="card">
        <p class="text-center"><a href="https://www.teq.com/state-approved/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/intranet-state-approved-map.jpg" /> State Approved <br />  Professional Development</a></p>
      </article>
    </div>
    <div class="columns small-6 medium-3">
      <article class="card">
        <p class="text-center"><a href="https://www.teq.com/contracts-map/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/intranet-contracts-channel.jpg" /> Channel <br />  Contracts Map</a></p>
      </article>
    </div>

  </div>
</section>

<!--

<div id="analytical-info" class="container grey-bg">
  <div class="row padding">
    <div id="embed-api-auth-container" class="col-md padding"></div>
  </div>
  <div class="row card">
    <div id="chart-container" class="col-md"></div>
  </div>
  <div class="row">
    <div id="view-selector-container"></div>
  </div>
</div>

-->

<!-- Load the library.

<script>
(function(w,d,s,g,js,fs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
  js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
}(window,document,'script'));
</script>

<script>

gapi.analytics.ready(function() {

  /**
   * Authorize the user immediately if the user has already granted access.
   * If no access has been created, render an authorize button inside the
   * element with the ID "embed-api-auth-container".
   */
  gapi.analytics.auth.authorize({
    container: 'embed-api-auth-container',
    clientid: '1025352079660-2r76judn9hmcfsuq1tsog82f6a6ei5gt.apps.googleusercontent.com'
  });


  /**
   * Create a new ViewSelector instance to be rendered inside of an
   * element with the id "view-selector-container".
   */
  var viewSelector = new gapi.analytics.ViewSelector({
    container: 'view-selector-container'
  });

  // Render the view selector to the page.
  viewSelector.execute();


  /**
   * Create a new DataChart instance with the given query parameters
   * and Google chart options. It will be rendered inside an element
   * with the id "chart-container".
   */
  var dataChart = new gapi.analytics.googleCharts.DataChart({
    query: {
      metrics: 'ga:sessions',
      dimensions: 'ga:date',
      'start-date': '30daysAgo',
      'end-date': 'yesterday'
    },
    chart: {
      container: 'chart-container',
      type: 'LINE',
      options: {
        width: '100%'
      }
    }
  });

  /**
   * Render the dataChart on the page whenever a new view is selected.
   */
  viewSelector.on('change', function(ids) {
    dataChart.set({query: {ids: ids}}).execute();
  });

});
</script>

-->

<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
