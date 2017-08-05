<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?> bg-<?php echo $page->color() ?>">
	
	<div class="container">
	  
	  <div class="cols-2-full cols-1-1024">
	  	
	  	<div class="col">
	  	
			  <div class="clients-text content-text">
				  
				  <h2>
					  
					  <?php if($page->subtitle()): ?>
					  
					  	<?php echo $page->subtitle() ?>
					  
					  <?php else: ?>
					  
					  	<?php echo $page->title() ?>
					  
					  <?php endif ?>
					
					</h2>
					
					<?php if($page->text()): ?>
					  
				  	<?php echo $page->text()->kirbytext() ?>
				  
				  <?php endif ?>
				  
			  </div>
			  
			  <?php if($page->hasChildren()): ?>
			  		
			  	<div class="clients-list-nav list-nav">
					
						<?php foreach($page->children()->visible() as $item): ?>
				  		
				  		<a id="<?php echo $item->uid() ?>-nav" class="client-item-nav"><?php echo $item->title() ?></a>
				  		
				  	<?php endforeach ?>
						
					</div>
			  
			  <?php endif ?>
			
	  	</div>
	  	
	  	<?php if($page->hasChildren()): ?>
			  		
		  	<div class="clients-list">
			  		
			  	<?php foreach($page->children()->visible() as $item): ?>
			  		
			  		<div id="<?php echo $item->uid() ?>" class="client-item">
				  		
				  		<span class="client-title client-title-back">
				  		
					  		<?php if($item->subtitle()): ?>
						  
							  	<?php echo $item->subtitle() ?>
							  
							  <?php else: ?>
							  
							  	<?php echo $item->title() ?>
							  
							  <?php endif ?>
				  		
				  		</span>
				  		
				  		<div class="client-item-container bg-<?php echo $page->color() ?>" style="background-image: url(<?php echo $item->image()->first()->url() ?>);">
					  		
					  		<span class="client-title client-title-front">
					  		
						  		<?php if($item->subtitle()): ?>
							  
								  	<?php echo $item->subtitle() ?>
								  
								  <?php else: ?>
								  
								  	<?php echo $$item->title() ?>
								  
								  <?php endif ?>
					  		
					  		</span>
					  		
					  		<?php if($item->text()): ?>
					  
							  	<?php echo $item->text()->kirbytext() ?>
							  
							  <?php endif ?>
							  
							  <?php if($item->images()->count() > 1): ?>
							  	
							  	<?php snippet("galerie", array('page' => $item, 'lientext' => 'Voir le projet', 'lienclass' => 'button')) ?>
							  	
							  <?php endif ?>
					  		
				  		</div>
				  		
			  		</div>
			  		
			  	<?php endforeach ?>
				
		  	</div>
				
		  <?php endif ?>
		
	  </div>
			
  </div>
	
</section>