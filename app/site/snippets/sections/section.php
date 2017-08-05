<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?> bg-<?php echo $page->color() ?> pos-<?php echo $page->position() ?>" <?php if($page->hasImages()): ?>style="background-image: url(<?php echo $page->images()->first()->url() ?>);"<?php endif ?>>
  
  <div class="container">
	  
	  <div class="cols-2-full cols-2-1280 cols-1-1024 cols-1-768 cols-1-480 cols-m">
	  
	  	<div class="col">
	  
			  <div class="section-text content-text">
				  
				  <h2>
					  
					  <?php if($page->subtitle() != ""): ?>
					  
					  	<?php echo $page->subtitle() ?>
					  
					  <?php else: ?>
					  
					  	<?php echo $page->title() ?>
					  
					  <?php endif ?>
					
					</h2>
					
					<?php if($page->text() != ""): ?>
					  
				  	<?php echo $page->text()->kirbytext() ?>
				  
				  <?php endif ?>
				  
			  </div>
				
				<?php snippet("links", array('page'=> $page)) ?>
				
	  	</div>
	  	
	  	<?php if($page->hasChildren()): ?>
	  		
	  		<div class="col">
		  		
		  		<?php foreach($page->children()->visible() as $subsection): ?>
		  			
		  			<?php if($subsection->template() == "subsection" || $subsection->template() == "default"): ?>
		  		
			  			<div class="subsection">
								
								<?php if($subsection->hasImages()): ?>
									
									<div class="cols-2-full cols-2-1280 cols-2-1024 cols-2-768 cols-1-480 cols-m cols-a">
									
										<div class="col w66-full w66-1280 w66-1024 w66-768 w100-480">
									
								<?php endif ?>
								
								<div class="subsection-content content-text">
								
								  <h3>
									  
									  <?php if($subsection->subtitle() != ""): ?>
									  
									  	<?php echo $subsection->subtitle() ?>
									  
									  <?php else: ?>
									  
									  	<?php echo $subsection->title() ?>
									  
									  <?php endif ?>
									
									</h3>
									
									<?php if($subsection->text() != ""): ?>
									  
								  	<?php echo $subsection->text()->kirbytext() ?>
								  
								  <?php endif ?>
								  
								  <?php if($subsection->lien() != ""): ?>
									  
								  	<a href="<?php echo $subsection->lien() ?>" class="more"><?php echo $subsection->textlien() ?></a>
								  
								  <?php endif ?>
								
								</div>
							  
							  <?php if($subsection->hasImages()): ?>
									
										</div>
										
										<div class="col w33-full w33-1280 w33-1024 w33-768 w100-480">
											
											<img src="<?php echo $subsection->images()->first()->url() ?>">
											
										</div>
									
									</div>
									
								<?php endif ?>
							  
						  </div>
						
						<?php endif ?>
		  		
		  		<?php endforeach ?>
		  		
	  		</div>
	  		
	  	<?php endif ?>
	  	
	  </div>
	  
  </div>
  
</section>