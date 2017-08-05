<div class="contact-popup">
	
	<div class="overlay">
		
		<div class="contact-popup-container w33-full">
			
			<div class="content-text">
			
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
			
			<?php snippet('form', array('page'=> $page)) ?>
			
			<?php if(page('contact')->adresse()): ?>
			
				<h2>Venez nous rencontrer</h2>
				
				<?php snippet('adresse', array('page'=> page('contact'))) ?>
				
				<?php snippet('heure-message', array('page'=> page('contact'))) ?>
				
				<?php snippet('itineraire', array('page'=> page('contact'))) ?>
				
			<?php endif ?>
			
		</div>
		
	</div>
	
</div>