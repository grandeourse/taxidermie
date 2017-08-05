<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?> bg-<?php echo $page->color() ?>">
  
  <div class="cols-2-full">
	  
	  <div class="banner-half-image col" style="background-image: url(<?php echo $page->image()->first()->url() ?>);">
		  
	  </div>
	  
	  <div class="col">
		  
		  <div class="container">
	  
			  <div class="banner-text content-text">
				  
				  <h1>
					  
					  <?php if($page->subtitle()): ?>
					  
					  	<?php echo $page->subtitle() ?>
					  
					  <?php else: ?>
					  
					  	<?php echo $page->title() ?>
					  
					  <?php endif ?>
					
					</h1>
					
					<?php if($page->text()): ?>
					  
				  	<?php echo $page->text()->kirbytext() ?>
				  
				  <?php endif ?>
				  
				  <?php if($page->lien()): ?>
					  
				  	<a href="<?php echo $page->lien() ?>" class="more"><?php echo $page->textlien() ?></a>
				  
				  <?php endif ?>
				  
			  </div>
			  
		  </div>
		  
	  </div>
	
  </div>
  
</section>