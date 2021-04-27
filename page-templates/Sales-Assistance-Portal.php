<?php
/**
 * Template Name: Sales Assistance Portal Index
 */
get_header(); ?>

<main id="sales-assistance-portal">
<?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

<script type="text/javascript">
  $(document).ready(function(){
    $("a.main-links").hover(function(){
      $(this).css("text-decoration", "underline");
    }, function(){
      $(this).css("text-decoration", "none");
    });
  });
</script>

<section class="container">
  <div class="title row">
    <div class="column small-12 medium-8">
      <h1 class="white-text"><strong>Sales</strong> Assistance Portal</h1>
    </div>
    <div class="column small-12 medium-4">
      <div class="search-field-container">
        <form role="search" method="get" id="search-field" action="<?php echo home_url( '/' ); ?>">
          <img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/search-icon.svg" id="search-icon" alt="Search" />
          <input type="hidden" value="salesassistance" name="post_type" />
          <input class="search-input" value="" name="s" id="s" placeholder="Type search term and press enter" type="text">
        </form>
      </div>
    </div>
  </div>
  <div class="row">
    <hr />
    <div class="columns">
      <p class="white-text ">Looking for more ways to boost your quarterly numbers? Questions on any of the products or services we sell? We’ve got you covered. Below you can find a list of categories to aid everyone in better understanding the sales process at Teq. <strong>Two heads are always better than one.</strong></p>
    </div>
  </div>
  <div class="row">
    <hr />
    <div class="columns small-4 padding-left">
      <h5 style="line-height: 1.75;">
        <a href="http://rus.teq.com/MyCalendar" class="white-text main-links">rus.teq.com</a><br />
        <a href="http://crm.teq.com/" class="white-text main-links">crm.teq.com</a><br />
        <a href="http://sapweb.teq.com" class="white-text main-links">sapweb.teq.com</a><br />
        <a href="http://sfs.teq.com/opd_users" class="white-text main-links">Opd Health Score</a><br />
        <a href="https://teqinc-my.sharepoint.com/:x:/g/personal/brianfried_teq_com/EXr5YGGnokBPlm6mNT5KyBYB67rrFC-42-fRe3DgAPREfQ?e=arpzC2" class="white-text main-links">RESOA MASTER TRACKER</a>
      </h5>
    </div>
    <div class="columns small-4">
      <h5 style="line-height: 1.75;">
        <a href="https://teqinc.sharepoint.com/sites/PriceBooks/Shared%20Documents/Forms/AllItems.aspx" class="white-text main-links">Price Books / Bids / Contracts</a><br />
        <a href="https://iblockstracker.teq.com/" class="white-text main-links">iBlocks Tracker</a><br />
        <a href="https://support.smarttech.com/forms/warranty-form" class="white-text main-links">SMART Warranty/Software Key Lookup</a><br />
        <a href="https://helpdesk.teq.com/" class="white-text main-links">helpdesk.teq.com</a><br />
        <a href="https://intranet.teq.com/wp-content/uploads/2021/03/OTPS-Obj-Code-June2020.pdf" class="white-text main-links">NYCDOE Obj Codes</a>
      </h5>
    </div>
    <div class="columns small-4 padding-left">
      <h5 style="line-height: 1.75;">
        <a href="https://ace.myisolved.com/UserLogin.aspx?ReturnUrl=%2fdefault.aspx" class="white-text main-links">iSolved</a><br />
        <a href="https://web.expensewire.com/expensewire/SignInPage.aspx" class="white-text main-links">ExpenseWire</a><br />
        <a href="https://teqinc-my.sharepoint.com/:x:/r/personal/brianfried_teq_com/_layouts/15/Doc.aspx?sourcedoc=%7B86721c85-1551-4619-a0a5-2686d49f38c2%7D&action=default&cid=33bd7901-6b0e-40fe-92e5-dded1964ab01" class="white-text main-links">Covering AE</a><br />
        <a href="https://payonline.teq.com/" class="white-text main-links">payonline.teq.com</a>
      </h5>
    </div>
  </div>
</section>
<br /><br />
<section class="container padding-bottom">
  <div class="row">
    <div class="column small-centered small-12 medium-12">
      <div class="row text-center">
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/datasheets/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-datasheets-icon.svg" /><span>Datasheets / Catalogs</span></a>
        </div>
        <!--
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/ebooks/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-ebook-icon.svg" /><span>ebooks</span></a>
        </div>
        -->
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/comparison-videos/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-comparison-videos-icon.svg" /><span>Comparison Videos</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/client-testimonials/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-client-testimonials-icon.svg" /><span>Client Testimonials</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/sales-cycle/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-sales-cycle-icon.svg" /><span>Sales Budget Cycle</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/discovery-questions/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-discovery-questions-icon.svg" /><span>Discovery Questions</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/sales-training/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-training-icon.svg" /><span>Sales Training</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/enterprise/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-enterprise-icon.svg" /><span>Enterprise</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/sales-processes/">
            <?php
              $recent_processes = wp_get_recent_posts(array('post_type' => 'salesassistance' , 'category_name' => 'sales-processes', 'posts_per_page' => 1));
                foreach( $recent_processes as $recent ){
                  if( strtotime( $recent["post_date"] ) > strtotime('-7 days') ) {
                    echo '<img id="new-items-icon" src="/images/new-items-icon.svg" />';
                  }
                }
            ?>
            <img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-sales-process-icon.svg" />
            <span>Sales Processes</span>
          </a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales/sales-forms/">
            <?php
              $recent_processes = wp_get_recent_posts(array('post_type' => 'salesassistance' , 'category_name' => 'sales-forms', 'posts_per_page' => 1));
                foreach( $recent_processes as $recent ){
                  if( strtotime( $recent["post_date"] ) > strtotime('-7 days') ) {
                    echo '<img id="new-items-icon" src="/images/new-items-icon.svg" />';
                  }
                }
            ?>
            <img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-forms-icon.svg" />
            <span>Sales Forms</span>
          </a>
        </div>

        <div class="columns small-6 medium-2 category-link">
          <a href="/sales/email-templates/">
            <?php
              $recent_processes = wp_get_recent_posts(array('post_type' => 'salesassistance' , 'category_name' => 'email-templates', 'posts_per_page' => 1));
                foreach( $recent_processes as $recent ){
                  if( strtotime( $recent["post_date"] ) > strtotime('-7 days') ) {
                    echo '<img id="new-items-icon" src="/images/new-items-icon.svg" />';
                  }
                }
            ?>
            <img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-email-templates-icon.svg" />
            <span>Email Templates</span>
          </a>
        </div>

        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/sales-messaging/">
            <?php
              $recent_messaging = wp_get_recent_posts(array('post_type' => 'salesassistance' , 'category_name' => 'sales-messaging', 'posts_per_page' => 1));
                foreach( $recent_messaging as $recent ){
                  if( strtotime( $recent["post_date"] ) > strtotime('-7 days') ) {
                    echo '<img id="new-items-icon" src="/images/new-items-icon.svg" />';
                  }
                }
            ?>
            <img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-messaging-icon.svg" />
            <span>Sales Messaging</span>
          </a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/sales-spif/">
            <?php
              $recent_spif = wp_get_recent_posts(array('post_type' => 'salesassistance' , 'category_name' => 'sales-spif', 'posts_per_page' => 1));
                foreach( $recent_spif as $recent ){
                  if( strtotime( $recent["post_date"] ) > strtotime('-7 days') ) {
                    echo '<img id="new-items-icon" src="/images/new-items-icon.svg" />';
                  }
                }
            ?>
            <img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-spif-icon.svg" />
            <span>SPIF</span>
          </a>
        </div>
        <div class="columns small-6 medium-2 category-link" style="clear:both;">
          <a href="https://teqinc.sharepoint.com/:x:/s/Library/EWg3AoABumJGhAFuaTBepiwBxRPY5kFJT5atCeGyJZVNrA?e=4%3AukubM6&at=9&CID=8847A1AB-2200-4305-AB5C-31170C2C2039&wdLOR=c9AFAE0E3-4951-431A-9C75-946488E33685"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-email-campaigns-icon.svg" /><span>Marketing Campaigns</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/salesagenda/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-agenda-icon.svg" /><span>Sales Agendas</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/marketing/event-requests/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-event-request-icon.svg" /><span>Event Request</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/creative/print/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-print-request-icon.svg" /><span>Print Request</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="https://www.teq.com/opd-schools/" target="_blank"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-opd-schools-icon.svg" /><span>OPD NYC Subscribers</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="https://www.teq.com/contracts-map/" target="_blank"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-contracts-map-icon.svg" /><span>State Contracts</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/ny-territories"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-nyc-doe-icon.svg" /><span>Territory Google Maps</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="http://www.surveygizmo.com/s3/3870375/pre-sales-survey"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-pre-sales-survey-icon.svg" /><span> Pre-Sales Survey</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="https://www.teq.com/pd-bios/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-team-bios-icon.svg" /><span>PD Team Bios</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales-assistance/furniture-configurations"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/sales-assistance-furniture-icon.svg" /><span>Furniture Configs</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="/sales/grants-and-funding/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/grants-and-funding-icon.svg" /><span>Grants and Funding</span></a>
        </div>
        <div class="columns small-6 medium-2 category-link">
          <a href="https://payonline.teq.com/"><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/payonline-icon.svg" /><span>PayOnline</span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--
<section class="container padding-bottom dark-background">
  <div class="row">
    <div class="column small-12 medium-12">
      <h2 class="teq-text padding"><strong>Upcoming Campaigns</strong></h2>
      <table class="campaigns">
        <thead>
          <tr>
            <th>Date</th>
            <th>Schedule Email Campaigns</th>
            <th>Target Market </th>
            <th></th>
          </tr>
        </thead>
      </table>
      <div class="campaign-container">
        <table class="campaigns">
          <tbody>
            <?php
              $the_query = new WP_Query( array(
                'posts_per_page'  => '20',
                'post_type'       => 'campaign'
              ));

              while ($the_query -> have_posts()) : $the_query -> the_post();

                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
            ?>
            <tr>
              <td><strong><?php echo get_post_meta( $post->ID, 'date', true ); ?></strong></td>
              <td><?php the_title();?></td>
              <td><?php echo get_post_meta( $post->ID, 'market', true ); ?></td>
              <td><h6 class="campaign-list-title">
                <?php if ( has_post_thumbnail() ) { ?>
    							<a href="<?php echo $thumb_url[0]; ?>" target="_blank" class="teq-text"><strong><img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/preview-icon.svg" /> PREVIEW</strong></a>
    						<?php } else { ?>
    							<a href="" class="teq-text"><strong>NO PREVIEW AVAILABLE</strong></a>
    						<?php } ?>
              </h6></td>
            </tr>
            <?php endwhile; wp_reset_postdata(); ?>
          </tbody>
        </table>
      </div>
      <h5 class="teq-text"><strong>Scroll down for more</strong> <img src="https://intranet.teq.com/wp-content/themes/FoundationPress-master/images/scroll-icon.svg" /></h5>
    </div>
  </div>
</section>
-->
</main>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
