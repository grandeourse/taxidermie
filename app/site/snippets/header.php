<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<link rel='stylesheet' id='icons-css'  href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' type='text/css' media='all' />
	
	<link rel="icon" type="image/png" href="<?php echo $site->url() ?>/assets/images/favicon.png" >
	
	<?php echo css('assets/css/main.css') ?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	<?php echo js('assets/js/main.js') ?>
	
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NQ2Z644');</script>

</head>

<body>
	
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQ2Z644"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<header>
		
		<div class="logo-icon">
			
			<span class="icon-grandeourse-icon"></span>
			
		</div>
		
		<?php /* TODO 
		
		<nav>
		
			<a>Contact</a>
		
		</nav>
		
		*/ ?>
		
	</header>