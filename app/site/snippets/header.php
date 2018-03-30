<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="theme-color" content="#00314b" />
	
	<link rel='stylesheet' id='icons-css'  href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' type='text/css' media='all' />
	
	<link rel="icon" type="image/png" href="<?php echo $site->url() ?>/assets/images/favicon.png" >
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	
	<?php echo css('assets/css/main.css') ?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	<?php echo js('assets/js/main.js') ?>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-104877801-1', 'auto');
	  ga('send', 'pageview');
	
	</script>

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