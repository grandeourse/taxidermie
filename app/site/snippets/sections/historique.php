<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?> bg-<?php echo $page->color() ?>" style="background-image: url(<?php echo $page->image()->first()->url() ?>);">
  
  <div class="container">
	  
	  <div class="content-text tcenter">
	  
		  <div class="historique-title">
					  
			  <div class="historique-date">
				  
				  <svg>
		  		
					  <text stroke="white"><?php echo $item->historiquedate() ?></text>
	
					</svg>
				  
			  </div>
			  
			  <h2>
				  
				  <?php if($page->subtitle()): ?>
				  
				  	<?php echo $page->subtitle() ?>
				  
				  <?php else: ?>
				  
				  	<?php echo $page->title() ?>
				  
				  <?php endif ?>
				
				</h2>
			
		  </div>
		 
	  </div>
	  
	  <div class="cols-2-full cols-1-1024 cols-m cols-a">
	  
	  	<div class="col">
	  
			  <div class="historique-text content-text tcenter">
					
					<?php if($page->text()): ?>
					  
				  	<?php echo $page->text()->kirbytext() ?>
				  
				  <?php endif ?>
				  
			  </div>
				
	  	</div>
	  	
	  	<div class="col">
		  	
		  	<img src="<?php echo $page->image()->first()->url() ?>">
		  	
	  	</div>
	  	
	  </div>
	  
  </div>
  
</section>