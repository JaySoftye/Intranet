<?php
/*
Template Name: Employee Handbook
*/
get_header(); ?>
<nav id="handbook-header">
  <div class="row">
    <div class="columns medium-4">
      <h1 class="hide-small"><img src="<?php echo get_template_directory_uri(); ?>/images/teq-employee-handbook.png" /></h1>
      <span><small>It's all about learning © 2017 Teq - all rights reserved</small></span>
    </div>
    <div class="columns medium-4"></div>
    <div class="columns medium-4 chapter-select">
      <label>Select Chapter
      <select id="nav-menu">
        <option value="handbook-contents" selected="selected">Welcome to Teq</option>
        <?php
          $the_query = new WP_Query( array(
            'post_type'       => 'employeehandbook',
            'posts_per_page'  => '-1',
            'meta_key'        => 'order',
            'orderby'         => 'meta_value_num',
            'order'           => 'ASC'
          ));
          while ($the_query -> have_posts()) : $the_query -> the_post();
        ?>
          <option value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></option>
        <?php endwhile; wp_reset_postdata(); ?>
      </select>
      </lable>
    </div>
  </div>

<script type="text/javascript">
  $('select#nav-menu').on('change', function() {
    $('body,html').animate({ scrollTop: $('#' + $(this).val()).position().top });
  });
</script>

</nav>
<main class="white-bg">
<section>
  <div class="row padding">
    <div class="large medium columns">
      <h1><img src="<?php echo get_template_directory_uri(); ?>/images/teq-employee-handbook-main-header.jpg" alt="Teq Employee Handbook" /></h1>
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      	<path style="fill:#0077c6" d="M52.455,96.289h-4.917l-0.18-0.035c-0.518-0.1-1.04-0.184-1.562-0.269c-1.209-0.195-2.459-0.397-3.702-0.781
      			c-12.403-3.827-19.752-12.218-21.843-24.939c-0.371-2.254-0.341-4.527-0.313-6.725c0.008-0.64,0.017-9.871,0.015-10.507
      			l-0.014-4.957c-0.012-3.879-0.012-3.879,0.014-10.48l0.004-0.973c0.06-14.612,11.008-27.291,25.468-29.492
      			c15.728-2.394,30.67,7.931,34.022,23.504c0.653,3.032,0.638,6.049,0.623,8.967c-0.003,0.444-0.005,0.888-0.005,1.332l0.001,1.901
      			c0.001,5.862,0.001,5.862-0.002,9.918l-0.003,13.173c-0.012,14.532-9.546,26.462-23.726,29.686c-0.881,0.2-1.758,0.337-2.607,0.47
      			c-0.371,0.058-0.742,0.116-1.112,0.18L52.455,96.289z M47.902,92.45h4.228c0.334-0.056,0.669-0.109,1.003-0.161
      			c0.822-0.129,1.597-0.251,2.352-0.422c12.393-2.818,20.727-13.244,20.737-25.944l0.003-13.173
      			c0.003-4.054,0.003-4.054,0.002-9.914l-0.001-1.901c0-0.451,0.003-0.902,0.005-1.353c0.015-2.836,0.029-5.515-0.536-8.138
      			C72.768,17.851,59.729,8.84,46.004,10.928c-12.608,1.92-22.155,12.973-22.206,25.713l-0.004,0.973
      			c-0.027,6.583-0.027,6.583-0.015,10.452l0.014,4.959c0.002,0.655-0.006,9.907-0.015,10.566c-0.027,2.125-0.053,4.133,0.263,6.054
      			c1.835,11.164,8.29,18.53,19.186,21.893c0.987,0.305,2.053,0.477,3.183,0.659C46.908,92.277,47.406,92.358,47.902,92.45z"/>
      	<path style="fill:#0077c6" class="scrolldown" d="M54.052,33.449c-0.059,1.186,0.003,2.401-0.201,3.551c-0.418,2.359-2.386,3.891-4.389,3.585
      			c-1.986-0.303-3.5-2.325-3.511-4.702c-0.008-1.614-0.004-3.23-0.001-4.844c0.006-2.583,1.794-4.729,3.938-4.734
      			c2.289-0.005,4.077,2.03,4.105,4.68c0.009,0.819,0.001,1.639,0.001,2.459C54.016,33.447,54.035,33.449,54.052,33.449z"/>
      </svg>
    </div>
  </div>
</section>
<section id="handbook-contents">

  <div class="row padding padding-bottom">
    <?php wp_reset_query();
      while(have_posts()) : the_post();
        the_content();
      endwhile; ?>
    <ol>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <li><a href="<?php echo '#' . get_the_ID(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; wp_reset_postdata(); ?>
    </ol>
  </div>
  <div id="handbook-post-contents" class="row">
    <?php while ($the_query -> have_posts()) : $the_query -> the_post();?>
      <article class="large medium columns post" id="<?php echo get_the_ID(); ?>">
        <h4><strong><?php the_title(); ?></strong></h4>
        <div class="info-section">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>

</section>
</main>
<footer id="handbook-footer">
  <div class="row">
    <div class="columns medium-4">
      <h1><img src="<?php echo get_template_directory_uri(); ?>/images/teq-employee-handbook.png" /></h1>
      <p><small>It's all about learning © 2017 Teq - all rights reserved</small></p>
    </div>
  </div>
</footer>
<?php wp_footer(); do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
