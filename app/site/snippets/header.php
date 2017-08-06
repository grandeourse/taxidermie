<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
	
	<link rel='stylesheet' id='icons-css'  href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' type='text/css' media='all' />
	
	<?php echo css('assets/css/main.css') ?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	<?php echo js('assets/js/main.js') ?>

</head>

<body>

	<header>
		
		<div class="logo-icon">
			
			<span class="icon-grandeourse-icon"></span>
			
		</div>
		
	</header>