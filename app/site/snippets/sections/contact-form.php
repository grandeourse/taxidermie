<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?> bg-<?php echo $page->color() ?>">
	
	<div class="container">
		
		<div class="cols-2-full">
			
			<div class="col">
				
				<h2>Contactez-nous</h2>
				
				<?php snippet('form', array('page'=> $page)) ?>
				
			</div>
			
			<div class="col">
				
				<?php if($page->lat() && $page->lon()): ?>
				
					<h2>Venez nous rencontrer</h2>
					
					<?php snippet('map', array('page'=> $page)) ?>
				
				<?php endif ?>
				
			</div>
			
		</div>
		
	</div>
		
</section>