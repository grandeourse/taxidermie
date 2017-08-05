<section id="banner" class="banner bg-<?php echo $page->color() ?>" style="background-image: url(<?php echo $page->images()->first()->url() ?>);">
  
  <div class="container">
	  
	  <div class="banner-content content-text">
		  
		  <h1>
			  
			  <?php if($page->subtitle() != ""): ?>
			  
			  	<?php echo $page->subtitle() ?>
			  
			  <?php else: ?>
			  
			  	<?php echo $page->title() ?>
			  
			  <?php endif ?>
			
			</h1>
			
			<?php if($page->text() != ""): ?>
			  
		  	<?php echo $page->text()->kirbytext() ?>
		  
		  <?php endif ?>
		  
		  <?php if($page->lien() != ""): ?>
			  
		  	<a href="<?php echo $page->lien() ?>" class="more"><?php echo $page->textlien() ?></a>
		  
		  <?php endif ?>
		  
	  </div>
	  
  </div>
  
</section>