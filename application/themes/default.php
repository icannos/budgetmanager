<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Budget Manager</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
	
        
		<!-- Le styles -->
		<link href="<?php echo css_url('bootstrap'); ?>" rel="stylesheet">
        <link href="<?php echo css_url('bootstrapperso'); ?>" rel="stylesheet">
		<link href="<?php echo css_url('jquery.pnotify.default'); ?>" rel="stylesheet">
		<link href="<?php echo css_url('m/m-styles.min'); ?>" rel="stylesheet">
		<link href="<?php echo css_url('m/m-normalize.min'); ?>" rel="stylesheet">
		<link href="<?php echo css_url('m/m-icons.min'); ?>" rel="stylesheet">
		<link href="<?php echo css_url('m/m-forms.min'); ?>" rel="stylesheet">
		<link href="<?php echo css_url('m/m-buttons.min'); ?>" rel="stylesheet">
		<link href="<?php echo css_url('fileupload/bootstrap-fileupload.min'); ?>" rel="stylesheet">
		<style>
			body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			}
		</style>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	
	<body>	
			<?php echo $output; ?>
			
			<!-- Le javascript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			
			<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="<?php echo js_url('bootstrap.min') ?>"></script>
		<script src="<?php echo js_url('budgetmanager') ?>"></script>
		<script src="<?php echo js_url('bootstrap-datepicker') ?>"></script>
		<script src="<?php echo js_url('jquery.pnotify.min') ?>"></script>
		<script src="<?php echo js_url('fileupload/bootstrap-fileupload.min') ?>"></script>
			
		</body>
	</html>		