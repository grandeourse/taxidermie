<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?>" <?php if($page->hasImages()): ?>style="background-image: url(<?php echo $page->images()->first()->url() ?>);"<?php endif ?>>
	
	<div class="banner-content">
		
		<div class="logo-font">
			
			<span class="icon-grande-ourse-logo"></span>
			
		</div>
		
	</div>
  
</section>