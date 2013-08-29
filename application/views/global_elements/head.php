<!DOCTYPE html>
<html lang="en" id="<?php echo $pageID; ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo $user_email ?></title>
	<link href="/application/stylesheets/styles.css" rel="stylesheet" />
	<link href="/application/third_party/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

	<!-- JS from 3rd parties and base js -->
	<script src="/application/javascripts/third-party/jquery.js" 
					type="text/javascript"></script>

	<script src="/application/javascripts/bootstrap/bootstrap-dropdown.js" 
					type="text/javascript"></script>			
	<script src="/application/javascripts/bootstrap/bootstrap-transition.js" 
					type="text/javascript"></script>
	<script src="/application/javascripts/bootstrap/bootstrap-modal.js" 
					type="text/javascript"></script>
	<script src="/application/javascripts/bootstrap/bootstrap-tooltip.js" 
					type="text/javascript"></script>
	<script src="/application/javascripts/bootstrap/bootstrap-popover.js" 
					type="text/javascript"></script>
	<script src="/application/javascripts/bootstrap/bootstrap-alert.js" 
					type="text/javascript"></script>

	<!-- JS used on all pages -->
	<script src="/application/javascripts/elements/LogInModal.js" 
					type="text/javascript"></script>

	<!-- JS for specific pages -->
	<?php 
		switch ($pageID) {
			case 'homeFeed': ?>
				<script src="/application/javascripts/pages/homeFeed.js" 
					type="text/javascript"></script>
				<?php
				break;
			case 'userCreateProfile': ?>
				<script src="/application/javascripts/pages/LinkedInProfile.js"
					type="text/javascript"></script>
				<?php
				break;
		}
	?>
</head>
<body>

