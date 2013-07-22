<!DOCTYPE html>
<html lang="en" id="<?php echo $pageID; ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo $user_email ?></title>
	<link href="/application/stylesheets/styles.css" rel="stylesheet" />

	<script src="/application/javascripts/third-party/jquery.js" 
					type="text/javascript"></script>

	<script src="/application/javascripts/bootstrap/bootstrap-dropdown.js" 
					type="text/javascript"></script>			
	<script src="/application/javascripts/bootstrap/bootstrap-transition.js" 
					type="text/javascript"></script>
	<script src="/application/javascripts/bootstrap/bootstrap-modal.js" 
					type="text/javascript"></script>

	<script src="/application/javascripts/elements/LogInModal.js" 
					type="text/javascript"></script>
 

	<!-- Load JS for each page -->
	<?php 
		switch ($pageID) {
			case 'userSignUp': ?>
				<script src="/application/javascripts/pages/UserSignUpPage.js" 
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


	<script type="text/javascript" src="http://platform.linkedin.com/in.js">
	  api_key: lydbpp0zdpad
	  onLoad: LinkedIn.onLinkedInLoad
  	authorize: true
	</script>

</head>
<body>

