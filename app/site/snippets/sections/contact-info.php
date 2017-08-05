<?php 
								
	date_default_timezone_set('America/Montreal'); 
	
	setlocale(LC_TIME, ""); 
	
	setlocale(LC_TIME, 'fr_CA'); 
	
	$heure_start = 0;
	
	$heure_end = 0;
	
?>

<section id="contact-info" class="contact-info bg-<?php echo $page->color() ?>">
  
  <div class="cols-2-full">
	  
	  <div class="banner-half-image col" <?php if($page->hasImages()): ?>style="background-image: url(<?php echo $page->images()->first()->url() ?>);"<?php endif ?>>
		  
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
					
					<div class="cols-2-full cols-m">
						
						<div class="col">
							
							<h3>Adresse</h3>
							
							<?php if($page->adresse()): ?>
								  
								<address class="contact-adresse"><?php echo $page->adresse() ?></address>
						  
						  <?php endif ?>
						  
						   <?php if($page->tel()): ?>
						  
						  	<a class="contact-tel"><?php echo $page->tel() ?></a>
						  
						  <?php endif ?>
						  
						  <?php if($page->email()): ?>
						  
						  	<a href="mailto:<?php echo $page->email() ?>" class="contact-email"><?php echo $page->email() ?></a>
						  
						  <?php endif ?>
						  
						</div>
						
						<div class="col">
							
							<?php if($page->heures()): ?>
							
								<h3>Heures d'ouverture</h3>
								
								<div class="contact-heures-list">
									
									<?php foreach($page->heures()->toStructure() as $heure): ?>
										
										<?php if(strftime('%A') == $heure->heure_jour()): ?>
											
											<?php $heure_start = $heure->heure_start() ?>
											
											<?php $heure_end = $heure->heure_end() ?>
											
										<?php endif ?>
										
										<div class="contact-heure-item">
											
											<span class="heure-jour"><?php echo $heure->heure_jour() ?></span>
											
											<span class="heure-heure"><?php echo $heure->heure_start() ?> à <?php echo $heure->heure_end() ?></span>
											
										</div>
									  
									<?php endforeach ?>
									
								</div>
								
								<div class="contact-heures-message">
									
									<?php if(strtotime(strftime('%H:%M')) >= strtotime($heure_start) && strtotime(strftime('%H:%M')) < strtotime($heure_end) && strtotime(strftime('%H:%M')) + 1*60*60 > strtotime($heure_end)): ?>
									
										<span class="soon">Fermeture Imminente</span>
									
									<?php elseif(strtotime(strftime('%H:%M')) >= strtotime($heure_start) && strtotime(strftime('%H:%M')) < strtotime($heure_end)): ?>
										
										<span class="opened">Ouvert maintenant</span>
										
									<?php else: ?>	
										
										<span class="closed">Fermé</span>
										
									<?php endif ?>
								
								</div>
								
							<?php endif ?>
						
						</div>
						
						<div class="contact-personnel-list cols-3-full cols-m">
							
							<?php foreach($page->contactinfos()->toStructure() as $heure): ?>
								
								<div class="contact-personnel-item col">
									
									<span class="personnel-title"><?php echo $heure->contact_info_title() ?></span>
									
									<span class="personnel-nom"><?php echo $heure->contact_info_nom() ?></span>
									
									<span class="personnel-tel"><?php echo $heure->contact_info_tel() ?></span>
									
								</div>
							  
							<?php endforeach ?>
							
						</div>
						
					</div>
				  
			  </div>
			  
		  </div>
		  
	  </div>
	
  </div>
  
</section>