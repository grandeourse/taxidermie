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
	
	<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3&#038;key=AIzaSyA4-NCvXJ8mOtDTbalStjw94Ld6Hz77Koo'></script>
	
	<?php echo js('assets/js/main.js') ?>
	
	<?php echo js('assets/js/map.js') ?>

</head>

<body>

	<header class="header-screen bp-min-769">
		
		<div class="container">
			
			<div class="cols-2-full cols-2-1280 cols-2-1024 cols-a">
				
				<div class="col w25-full w25-1280 w25-1024">
				
					<a href="<?php echo url() ?>" class="logo">
						
						<?php if($site->image()): ?>
						
							<img src="<?php echo $site->image($site->logo())->url() ?>" title="<?php echo $site->title() ?>">
							
						<?php else: ?>
						
							<?php echo $site->title() ?>
							
						<?php endif ?>
						
					</a>
				
				</div>
			
				<div class="col w75-full w75-1280 w75-1024">
			
					<nav class="menu-screen">
						
						<ul>
						
				  		<?php foreach($site->pages()->visible() as $p): ?>
				  		
				  			<li class="<?php if($p->isOpen()): ?>active<?php endif ?>">
				  			
				  				<a href="<?php echo $p->url() ?>" id="nav-item-<?php echo $p->uid() ?>" class="nav-item nav-item-<?php echo $p->template() ?>"><?php echo $p->title() ?></a>
									
									<?php if($p->hasChildren()): ?>
									
										<ul>
											
											<?php foreach($p->children()->visible() as $section): ?>
											
												<li><a href="#<?php echo $section->uid() ?>" id="nav-sub-item-<?php echo $section->uid() ?>" class="nav-sub-item nav-item-<?php echo $section->template() ?>"><?php echo $section->title() ?></a></li>
												
											<?php endforeach ?>
											
										</ul>
									
									<?php endif ?>
									
				  			</li>
				  		
				  		<?php endforeach ?>
				  		
				  		<li>
				  			
				  			<?php snippet('tel', array('page'=> page('contact'))) ?>
				  		
				  		</li>
				  		
						</ul>
					
					</nav>
				
				</div>
			
			</div>
		
		</div>
	
	</header>
	
	<header class="header-mobile bp-max-768">
		
		<div class="cols-2-768 cols-2-480 cols-a">
			
			<div class="col w40-768 w60-480">
				
				<div class="logo">
			
					<?php if($site->image()): ?>
					
						<img src="<?php echo $site->image($site->logo())->url() ?>" title="<?php echo $site->title() ?>">
						
					<?php else: ?>
					
						<?php echo $site->title() ?>
						
					<?php endif ?>
					
				</div>
				
			</div>
		
			<div class="col w60-768 w40-480">
				
				<a id="burger" class="burger bp-max-1024">
			
					<div class="open">
						
						<span></span>
						<span></span>
						<span></span>
						
					</div>
					
					<div class="close">
						
						<span></span>
						<span></span>
						
					</div>
					
				</a>
				
			</div>
		
		</div>
	
	</header>
	
	<nav class="menu-mobile bp-max-768 bp-flex" style="background-image: url(<?php if($page->hasImages()): echo $page->images()->first()->url(); endif ?>)">
		
		<div class="container">
				
			<ul>
				
	  		<?php foreach($site->pages()->visible() as $p): ?>
	  		
	  			<li>
	  			
	  				<a href="<?php echo $p->url() ?>" id="nav-item-<?php echo $p->uid() ?>" class="nav-item nav-item-<?php echo $p->template() ?>"><?php echo $p->title() ?></a>
						
	  			</li>
	  		
	  		<?php endforeach ?>
	  		
	  		<li>
				  			
	  			<?php snippet('tel', array('page'=> page('contact'))) ?>
	  		
	  		</li>
	  		
			</ul>
		
		</div>
	
	</nav>