<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?> bg-<?php echo $page->color() ?>">
	
	<div class="equipe-image" style="background-image: url(<?php echo $page->image()->first()->url() ?>);"></div>
	
	<div class="container">
	  
	  <div class="content-text tcenter">
					  
		  <h2>
		  		
	  		<svg>
	  		
				  <text stroke="white"><?php echo $item->title() ?></text>

				</svg>
	  	
	  	</h2>
	  
	  </div>
	  
	  <div class="equipe-list-w-image cols-3-full cols-m">
		  
		  <?php foreach($page->children()->visible() as $item): ?>
		  
		  	<?php if($item->wimage()): ?>
		  
				  <div class="col equipe-item-w-image" style="background-image: url(<?php echo $item->image()->first()->url() ?>);">
					  
					  <span class="equipe-item-title"><?php echo $item->title() ?></span>
					  
					  <span class="equipe-item-poste"><?php echo $item->poste() ?></span>
					  
				  </div>
				
				<?php endif ?>
			
			<?php endforeach ?>
		  
	  </div>
	  
	  <div class="equipe-list cols-5-full cols-m">
		  
		  <?php foreach($page->children()->visible() as $item): ?>
		  
		  	<?php if(!$item->wimage()): ?>
		  
				  <div class="col equipe-item">
					  
					  <span class="equipe-item-title"><?php echo $item->title() ?></span>
					  
					  <span class="equipe-item-poste"><?php echo $item->poste() ?></span>
					  
				  </div>
				
				<?php endif ?>
			
			<?php endforeach ?>
		  
	  </div>  
	
</section>