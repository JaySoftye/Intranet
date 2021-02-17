<?php
/**
 * The template for gathering the custom post META fields to the Post Type.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 add_action( 'post_edit_form_tag' , 'post_edit_form_tag' );

	 function post_edit_form_tag( ) {
		 echo ' enctype="multipart/form-data"';
	 }

 if ( isset( $_POST['submitted'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' ) ) {


	// These files need to be included as dependencies when on the front end.
	 require_once( ABSPATH . 'wp-admin/includes/image.php' );
	 require_once( ABSPATH . 'wp-admin/includes/file.php' );
	 require_once( ABSPATH . 'wp-admin/includes/media.php' );

	 $startDate = wp_strip_all_tags($_POST['postStartDate']);
	 $endDate = wp_strip_all_tags($_POST['postEndDate']);
	 $solutionSet = wp_strip_all_tags($_POST['postSolutionSet']);
	 $productPositioning = wp_strip_all_tags($_POST['postProductPositioning']);
	 $campaignObjective = wp_strip_all_tags($_POST['postCampaignObjective']);
	 $targetedLists = wp_strip_all_tags($_POST['postTargetedLists']);
	 $targetedTitles = wp_strip_all_tags($_POST['postTargetedTitles']);
	 $valueProposition = wp_strip_all_tags($_POST['postValueProposition']);
	 $campaignStrategy = wp_strip_all_tags($_POST['postCampaignStrategy']);
	 $estimatedOpens = wp_strip_all_tags($_POST['EstimatedOpens']);
	 $averageCall = wp_strip_all_tags($_POST['postAverageCall']);
	 $socialMediaStartDate = wp_strip_all_tags($_POST['postSocialMediaStartDate']);
	 $campaignEvents = wp_strip_all_tags($_POST['postCampaignEvents']);
	 $discoveryQuestions = wp_strip_all_tags($_POST['postDiscoveryQuestions']);
	 $nuturingEmails = wp_strip_all_tags($_POST['postNuturingEmails']);
	 $newsletters = wp_strip_all_tags($_POST['postNewsletters']);
	 $salesPresentations = wp_strip_all_tags($_POST['postSalesPresentations']);
	 $fundingSources = wp_strip_all_tags($_POST['postFundingSources']);
	 $buyingCycles = wp_strip_all_tags($_POST['postBuyingCycles']);
	 $topResources = wp_strip_all_tags($_POST['postTopResources']);
	 $pricing = wp_strip_all_tags($_POST['postPricing']);
	 $vendorSupport = wp_strip_all_tags($_POST['postVendorSupport']);
	 $dealProposal = wp_strip_all_tags($_POST['postDealProposal']);
	 $bestPractices = wp_strip_all_tags($_POST['postBestPractices']);
	 $competitors = wp_strip_all_tags($_POST['postCompetitors']);
	 $closing = wp_strip_all_tags($_POST['postClosing']);
	 $voicemailScript = wp_strip_all_tags($_POST['postVoicemailScript']);
	 $voicemailDuration = wp_strip_all_tags($_POST['postVoicemailDuration']);
	 $followupEmail = wp_strip_all_tags($_POST['postFollowupEmail']);
	 $followupEmailTitles = wp_strip_all_tags($_POST['postFollowupEmailTitles']);
 // Let WordPress handle the upload.
	 $attachment_id_1 = media_handle_upload( 'image_upload', $_POST['post_id'] );
	 $attachment_id_2 = media_handle_upload( 'social_image_upload', $_POST['post_id'] );
	 $attachment_id_3 = media_handle_upload( 'website_image_upload', $_POST['post_id'] );
	 $attachment_id_4 = media_handle_upload( 'page_image_upload', $_POST['post_id'] );

		 $post_information = array(
				 'post_title' => wp_strip_all_tags( $_POST['postTitle'] ),
				 'post_type' => 'post',
				 'post_status' => 'publish'
		 );

	 $new_post = wp_insert_post( $post_information );
		 add_post_meta($new_post, "emailImage", $attachment_id_1);
		 add_post_meta($new_post, "socialImage", $attachment_id_2);
		 add_post_meta($new_post, "websiteImage", $attachment_id_3);
		 add_post_meta($new_post, "pageImage", $attachment_id_4);
		 add_post_meta($new_post, "postStartDate", $startDate);
		 add_post_meta($new_post, "postEndDate", $endDate);
		 add_post_meta($new_post, "postSolutionSet", $solutionSet);
		 add_post_meta($new_post, "postProductPositioning", $productPositioning);
		 add_post_meta($new_post, "postCampaignObjective", $campaignObjective);
		 add_post_meta($new_post, "postTargetedLists", $targetedLists);
		 add_post_meta($new_post, "postTargetedTitles", $targetedTitles);
		 add_post_meta($new_post, "postValueProposition", $valueProposition);
		 add_post_meta($new_post, "postCampaignStrategy", $campaignStrategy);
		 add_post_meta($new_post, "postEstimatedOpens", $estimatedOpens);
		 add_post_meta($new_post, "postAverageCall", $AverageCall);
		 add_post_meta($new_post, "postSocialMediaStartDate", $socialMediaStartDate);
		 add_post_meta($new_post, "postCampaignEvents", $campaignEvents);
		 add_post_meta($new_post, "postDiscoveryQuestions", $discoveryQuestions);
		 add_post_meta($new_post, "postNuturingEmails", $nuturingEmails);
		 add_post_meta($new_post, "postNewsletters", $newsletters);
		 add_post_meta($new_post, "postSalesPresentations", $salesPresentations);
		 add_post_meta($new_post, "postFundingSources", $fundingSources);
		 add_post_meta($new_post, "postBuyingCycles", $buyingCycles);
		 add_post_meta($new_post, "postTopResources", $topResources);
		 add_post_meta($new_post, "postPricing", $pricing);
		 add_post_meta($new_post, "postVendorSupport", $vendorSupport);
		 add_post_meta($new_post, "postDealProposal", $dealProposal);
		 add_post_meta($new_post, "postBestPractices", $bestPractices);
		 add_post_meta($new_post, "postCompetitors", $competitors);
		 add_post_meta($new_post, "postClosing", $closing);
		 add_post_meta($new_post, "postVoicemailScript", $voicemailScript);
		 add_post_meta($new_post, "postVoicemailDuration", $voicemailDuration);
		 add_post_meta($new_post, "postFollowupEmail", $followupEmail);
		 add_post_meta($new_post, "postFollowupEmailTitles", $followupEmailTitles);
		 // The image was uploaded successfully!
	
 }

?>
