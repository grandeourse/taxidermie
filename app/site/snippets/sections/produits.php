<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?> bg-<?php echo $page->color() ?>">
	
	<?php if($page->hasChildren()): ?>
			  		
  	<div class="produits-cat-list">
	  		
	  	<?php foreach($page->children()->visible() as $item): ?>
	  		
	  		<div id="<?php echo $item->uid() ?>" class="produit-cat-item">
		  		
		  		<h2>
			  		
			  		<svg>
			  		
						  <text stroke="white"><?php echo $item->title() ?></text>

						</svg>
			  	
			  	</h2>
			  	
			  	<div class="produits-list cols-3-full">
			  	
				  	<?php foreach($item->children()->visible() as $produit): ?>
				  		
				  		<div class="produit-item col" style="background-image: url(<?php echo $produit->image()->first()->url() ?>);">
					  		
					  		<h2><?php echo $produit->title() ?></h2>
					  		
					  		<?php if($produit->text()): ?>
					  
							  	<?php echo $produit->text()->kirbytext() ?>
							  
							  <?php endif ?>
					  		
				  		</div>
				  		
				  	<?php endforeach ?>
			  	
						<?php if($item->text()): ?>
							
							<div class="produit-cat-text col">
							
					  		<?php echo $item->text()->kirbytext() ?>
					  		
					  		<?php snippet("toggle-contact", array('page'=> $item)) ?>
					  	
							</div>
					  
					  <?php endif ?>
						
			  	</div>
		  		
	  		</div>
	  		
	  	<?php endforeach ?>
		
  	</div>
  
  <?php endif ?>
	
</section>