<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?>" <?php if($page->hasImages()): ?>style="background-image: url(<?php echo $page->images()->first()->url() ?>);"<?php endif ?>>
  
  <?php if($page->hasVideos()): ?>
  
	  <div class="video-viewport">
		  
			<video width="1920" height="1280" autoplay muted loop>
				
				<source src="<?php echo $page->videos()->first()->url() ?>" type="video/mp4" />
				
			</video>
			
		</div>
	
	<?php endif ?>
	
	<div class="banner-content">
		
		<div class="logo-font">
			
			<span class="icon-grandeourse-logo"></span>
			
		</div>
		
	</div>
  
</section>