<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?> bg-<?php echo $page->color() ?>">
	
	<div class="container">
	  
	  <div class="cols-2-full cols-1-1024">
	  	
	  	<div class="col">
	  	
			  <div class="conteneurs-text content-text">
				  
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
			  		
			  	<div class="conteneurs-list-content cols-2-full cols-m">
				  		
				  	<?php foreach($page->children()->visible() as $item): ?>
				  		
				  		<div id="<?php echo $item->uid() ?>-content" class="conteneur-item-content col">
					  		
					  		<h4><?php echo $item->title() ?></h4>
					  		
					  		<?php if($item->text()): ?>
					  
							  	<?php echo $item->text()->kirbytext() ?>
							  
							  <?php endif ?>
					  		
				  		</div>
				  		
				  	<?php endforeach ?>
					
			  	</div>
			  
			  <?php endif ?>
			
	  	</div>
	  	
	  	<?php if($page->hasChildren()): ?>
			  		
		  	<div class="conteneurs-list-image">
			  		
			  	<?php foreach($page->children()->visible() as $item): ?>
			  		
			  		<div id="<?php echo $item->uid() ?>-image" class="conteneur-item-image">
				  		
				  		<img src="<?php echo $item->image()->first()->url() ?>" alt="<?php echo $item->title() ?>">
				  		
			  		</div>
			  		
			  	<?php endforeach ?>
				
		  	</div>
				
				<div class="conteneurs-list-nav cols-4-full">
					
					<?php foreach($page->children()->visible() as $item): ?>
			  		
			  		<a id="<?php echo $item->uid() ?>-nav" class="conteneur-item-nav col">
				  		
				  		<span><?php echo $item->title() ?></span>
				  		
			  		</a>
			  		
			  	<?php endforeach ?>
					
				</div>
				
				<?php snippet("links", array('page'=> $page)) ?>
				
		  <?php endif ?>
		
	  </div>
			
  </div>
	
</section>