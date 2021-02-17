<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php
	while ( have_posts() ) : the_post();

		$email_image_id = get_post_meta( $post->ID, 'emailImage', true );
		$social_image_id = get_post_meta( $post->ID, 'socialImage', true );
		$website_image_id = get_post_meta( $post->ID, 'websiteImage', true );
		$page_image_id = get_post_meta( $post->ID, 'pageImage', true );
?>
<?php
	// The Regular Expression filter
	$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
?>
<div class="header-bar dark-bg">
    <div class="row">
    	<div class="large-8 medium-8 columns">
        <?php if ( $postTitleError != '' ) { ?>
    		<h2 class="error">* <?php echo $postTitleError; ?></h2>
    		<div class="clearfix"></div>
		<?php } ?>

<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

        <h3> <?php the_title(); ?> </h3>
    	</div>
	</div>
    <div class="row">
		<div class="large-4 medium-4 columns" style="padding: 0 0;">
			<div class="large-6 medium-6 columns">
				<h5>Start Date</h5>
                	<div class="meta-content">
						<?php echo get_post_meta( $post->ID, 'postStartDate', true ); ?>
					</div>
	    	</div>
        	<div class="large-6 medium-6 columns add">
            	<h5>End Date</h5>
                	<div class="meta-content">
						<?php echo get_post_meta( $post->ID, 'postEndDate', true ); ?>
                    </div>
                    <div></div>
            </div>
		</div>
        <div class="large-4 medium-4 columns">
        	<h5>Solution Set</h5>
                	<div class="meta-content">
						<?php
							$textSolutionSet = get_post_meta( $post->ID, 'postSolutionSet', true );  // The Text you want to filter for urls

							if(preg_match($reg_exUrl, $textSolutionSet, $url)) {  // Check if there is a url in the text
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textSolutionSet);   // make the urls hyper links
									} else {
       								echo $textSolutionSet; // if no urls in the text just return the text
								}
						?>
                    </div>
        </div>
        <div class="large-4 medium-4 columns">
        	<h5>Product Positioning</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postProductPositioning', true ); ?>
                </div>
        </div>
	</div>
</div>

<div class="header-bar half-dark-bg">
	<div class="row">
        	<div class="large-6 medium-6 columns">
          		<h3> Creative Assets </h3>
            </div>
    </div>
	<div class="row">
      	<div class="large-3 medium-3 columns">
            	<div class="img-assets">
            	<?php
					$email_image = wp_get_attachment_image($email_image_id, $size = 'thumbnail');
						echo '<a class="button-popup" href="#emailpopup">' . $email_image . '</a>';
				?>
                <h5>Email Campaign</h5>
					<div id="emailpopup" class="overlay">
                    	<a class="close" href="#">CLOSE X</a>
						<div class="popup">
							<br />
								<?php
									$email_imageFull = wp_get_attachment_image($email_image_id, $size = 'full');
										echo $email_imageFull;
								?>
						</div>
					</div>
        		</div>
        </div>
		<div class="large-3 medium-3 columns">
        	<div class="img-assets">
				<?php
					$social_image = wp_get_attachment_image($social_image_id, $size = 'thumbnail');
						echo '<a class="button-popup" href="#socialpopup">' . $social_image . '</a>';
				?>
                <h5>Social Media</h5>
                	<div id="socialpopup" class="overlay">
                    	<a class="close" href="#">CLOSE X</a>
						<div class="popup">
								<?php
									$social_imageFull = wp_get_attachment_image($social_image_id, $size = 'full');
										echo $social_imageFull;
								?>
						</div>
					</div>
        	</div>
        </div>
        <div class="large-3 medium-3 columns">
        	<div class="img-assets">
				<?php
					$website_image = wp_get_attachment_image($website_image_id, $size = 'thumbnail');
						echo '<a class="button-popup" href="#websitepopup">' . $website_image . '</a>';
				?>
                <h5>Website Promo</h5>
                	<div id="websitepopup" class="overlay">
                    	<a class="close" href="#">CLOSE X</a>
						<div class="popup">
								<?php
									$website_imageFull = wp_get_attachment_image($website_image_id, $size = 'full');
										echo $website_imageFull;
								?>
						</div>
					</div>
        	</div>
        </div>
        <div class="large-3 medium-3 columns">
        	<div class="img-assets">
				<?php
					$page_image = wp_get_attachment_image($page_image_id, $size = 'thumbnail');
						echo '<a class="button-popup" href="#pagepopup">' . $page_image . '</a>';
				?>
                <h5>Landing Page</h5>
                	<div id="pagepopup" class="overlay">
                    <a class="close" href="#">CLOSE X</a>
						<div class="popup">
								<?php
									$page_imageFull = wp_get_attachment_image($page_image_id, $size = 'full');
										echo $page_imageFull;
								?>
						</div>
					</div>
        	</div>
        </div>
	</div>
</div>

<div class="header-bar dark-bg">
    <div class="row">
        <div class="large-8 medium-8 columns">
        	<h5>Campaign Objective</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postCampaignObjective', true ); ?>
                </div>
        </div>
        <div class="large-4 medium-4 columns">
        	<h5>Targeted Lists</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postTargetedLists', true ); ?>
                </div>
        </div>
	</div>
    <div class="row">
        <div class="large-4 medium-4 columns">
        	<h5>Targeted Title</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postTargetedTitles', true ); ?>
                </div>
        </div>
        <div class="large-4 medium-4 columns">
        	<h5>Value Proposition</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postValueProposition', true ); ?>
                </div>
        </div>
        <div class="large-4 medium-4 columns">
        	<h5>Campaign Strategy</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postCampaignStrategy', true ); ?>
                </div>
        </div>
	</div>
</div>

<div class="header-bar half-dark-bg">
	<div class="row">
        	<div class="large-10 medium-10 columns">
          		<h3>Campaign Activity (to be tracked)</h3>
            </div>
    </div>
    <div class="row">
        <div class="large-4 medium-4 columns">
        	<h5>Estimated Open/Click Rate</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postEstimatedOpens', true ); ?>
                </div>
        </div>
        <div class="large-8 medium-8 columns">
        	<h5>Expected Average Call Time on Clicks</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postAverageCall', true ); ?>
                </div>
        </div>
	</div>
</div>

<div class="header-bar dark-bg">
	<div class="row">
    	<div class="large-4 medium-4 columns">
			<h3> Scheduled Dates </h3>
        </div>
        <div class="large-8 medium-8 columns">
			<h3> Campaign Discovery </h3>
        </div>
    </div>
    <div class="row">
		<div class="large-4 medium-4 columns" style="padding: 0 0;">
        	<div class="large-12 medium-12 columns add">
            	<h5>Social Media Campaign Start Date</h5>
               		<div class="meta-content">
						<?php echo get_post_meta( $post->ID, 'postSocialMediaStartDate', true ); ?>
                    </div>
	    	</div>
            <div class="large-12 medium-12 columns">
            	<h5>Campaign Events</h5>
               		<div class="meta-content">
                    	<?php
							$textCampaignEvents = get_post_meta( $post->ID, 'postCampaignEvents', true );

							if(preg_match($reg_exUrl, $textCampaignEvents, $url)) {
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textCampaignEvents);
									} else {
       								echo $textCampaignEvents;
								}
						?>
                    </div>
            </div>
		</div>
        <div class="large-8 medium-8 columns">
        	<h5>Discovery Questions</h5>
                <div class="meta-content">
               			<?php
							$textDiscoveryQuestions = get_post_meta( $post->ID, 'postDiscoveryQuestions', true );

							if(preg_match($reg_exUrl, $textDiscoveryQuestions, $url)) {
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textDiscoveryQuestions);
									} else {
       								echo $textDiscoveryQuestions;
								}
						?>
                </div>
            <h5>Nuturing Emails</h5>
                <div class="meta-content">
                		<?php
							$textNuturingEmails = get_post_meta( $post->ID, 'postNuturingEmails', true );

							if(preg_match($reg_exUrl, $textNuturingEmails, $url)) {
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textNuturingEmails);
									} else {
       								echo $textNuturingEmails;
								}
						?>
                </div>
            <h5>Recent Newsletters on the Product</h5>
                <div class="meta-content">
                		<?php
							$textNewsletters = get_post_meta( $post->ID, 'postNewsletters', true );

							if(preg_match($reg_exUrl, $textNewsletters, $url)) {
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textNewsletters);
									} else {
       								echo $textNewsletters;
								}
						?>
                </div>
            <h5>SalesPresentations</h5>
                <div class="meta-content">
                		<?php
							$textSalesPresentations = get_post_meta( $post->ID, 'postSalesPresentations', true );

							if(preg_match($reg_exUrl, $textSalesPresentations, $url)) {
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textSalesPresentations);
									} else {
       								echo $textSalesPresentations;
								}
						?>
                </div>
            <h5>Funding Sources</h5>
                <div class="meta-content">
                		<?php
							$textFundingSources = get_post_meta( $post->ID, 'postFundingSources', true );

							if(preg_match($reg_exUrl, $textFundingSources, $url)) {
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textFundingSources);
									} else {
       								echo $textFundingSources;
								}
						?>
                </div>
        </div>


	</div>
</div>

<div class="header-bar half-dark-bg">
    <div class="row">
    	<div class="large-6 medium-6 columns">
			<h3> Additional Campaign Support</h3>
        </div>
    </div>
    <div class="row">
        <div class="large-4 medium-4 columns">
        	<h5>Buying Cycle</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postBuyingCycles', true ); ?>
                </div>
        </div>
        <div class="large-8 medium-8 columns">
            <h5>Top Resources</h5>
                <div class="meta-content">
    	            <?php
							$textTopResources = get_post_meta( $post->ID, 'postTopResources', true );

							if(preg_match($reg_exUrl, $textTopResources, $url)) {
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textTopResources);
									} else {
       								echo $textTopResources;
								}
					?>
                </div>
            <h5>Pricing</h5>
                <div class="meta-content">
                	<?php
							$textPricing = get_post_meta( $post->ID, 'postPricing', true );

							if(preg_match($reg_exUrl, $textPricing, $url)) {
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textPricing);
									} else {
       								echo $textPricing;
								}
					?>
                </div>
        </div>
	</div>
</div>

<div class="header-bar dark-bg">
    <div class="row">
    	<div class="large-6 medium-6 columns">
			<h3> Voicemail Script</h3>
        </div>
    </div>
    <div class="row">
        <div class="large-10 medium-10 columns">
        	<h5>Voicemail Script</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postVoicemailScript', true ); ?>
                </div>
        </div>
        <div class="large-2 medium-2 columns">
            <h5>Duration</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postVoicemailDuration', true ); ?>
                </div>
        </div>
	</div>
</div>

<div class="header-bar half-dark-bg">
    <div class="row">
    	<div class="large-6 medium-6 columns">
			<h3> Email Follow-up</h3>
        </div>
    </div>
    <div class="row">
        <div class="large-9 medium-9 columns">
        	<h5>Your Follow-up Email Script</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postFollowupEmail', true ); ?>
                </div>
        </div>
        <div class="large-3 medium-3 columns">
            <h5>Titles, NYS,/DOE, Channels</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postFollowupEmailTitles', true ); ?>
                </div>
        </div>
	</div>
</div>

<div class="header-bar dark-bg">
    <div class="row">
        	<div class="large-6 medium-6 columns">
			<h3> The Close</h3>
        </div>
    </div>
    <div class="row">
        <div class="large-4 medium-4 columns">
        	<h5>Vendor Support</h5>
                <div class="meta-content">
					<?php echo get_post_meta( $post->ID, 'postVendorSupport', true ); ?>
                </div>
        </div>

        <div class="large-4 medium-4 columns">
        	<h5>Creating a Large Deal Proposal</h5>
                <div class="meta-content">
                	<?php
							$textDealProposal = get_post_meta( $post->ID, 'postDealProposal', true );

							if(preg_match($reg_exUrl, $textDealProposal, $url)) {
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textDealProposal);
									} else {
       								echo $textDealProposal;
								}
					?>
                </div>
        </div>
        <div class="large-4 medium-4 columns">
        	<h5>Best Practices</h5>
                <div class="meta-content">
                	<?php
							$textBestPractices = get_post_meta( $post->ID, 'postBestPractices', true );

							if(preg_match($reg_exUrl, $textBestPractices, $url)) {
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textBestPractices);
									} else {
       								echo $textBestPractices;
								}
					?>
                </div>
        </div>
	</div>
    <div class="row">
        <div class="large-8 medium-8 columns">
        	<h5>Competitors</h5>
                <div class="meta-content">
                	<?php
							$textCompetitors = get_post_meta( $post->ID, 'postCompetitors', true );

							if(preg_match($reg_exUrl, $textCompetitors, $url)) {
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textCompetitors);
									} else {
       								echo $textCompetitors;
								}
					?>
                </div>
        </div>
        <div class="large-4 medium-4 columns">
        	<h5>Closing</h5>
                <div class="meta-content">
               		<?php
							$textClosing = get_post_meta( $post->ID, 'postClosing', true );

							if(preg_match($reg_exUrl, $textClosing, $url)) {
       							echo preg_replace($reg_exUrl, "<a href='{$url[0]}' target='_blank'>{$url[0]}</a>", $textClosing);
									} else {
       								echo $textClosing;
								}
					?>
                </div>
        </div>
	</div>
</div>

<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>
<?php get_footer();
