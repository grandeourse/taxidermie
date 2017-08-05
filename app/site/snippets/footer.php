	  <footer>
	  
	  <div class="cols-2-full cols-2-1280 cols-1-1024 cols-a">
		  
		  <div class="col w66-full w66-1280 w100-1024">
			  
			  <div class="footer-content content-text twhite">
			  
				  <div class="cols-3-full cols-3-1280 cols-3-1024 cols-1-768 cols-m cols-a">
					  
					  <?php if(page('contact')->adresse()): ?>
					  
						  <div class="col">
							  
							  <?php snippet('adresse', array('page'=> page('contact'))) ?>
									
								<?php snippet('heures-message', array('page'=> page('contact'))) ?>
							  
						  </div>
					  
					  <?php endif ?>
					  
					  <?php if(page('contact')->tel() || page('contact')->email()): ?>
					  
						  <div class="col">
							  
							  <?php snippet('tel', array('page'=> page('contact'))) ?>
							  
							  <?php snippet('email', array('page'=> page('contact'))) ?>
							  
						  </div>
					  
					  <?php endif ?>
					  
					  <?php if(page('contact')->adresse() || page('contact')->heures()): ?>
					  
						  <div class="col">
							  
							  <?php snippet('itineraire', array('page'=> page('contact'))) ?>
							  
							  <?php if(page('contact')->heures()): ?>
							  
							  	<a href="<?php echo page('contact')->url() ?>" class="footer-heures"><i class="fa fa-clock-o" aria-hidden="true"></i> Heures d'ouvertures</a>
							  
							  <?php endif ?>
							  
						  </div>
					  
					  <?php endif ?>
					  
				  </div>
				
			  </div>
			  
		  </div>
		  
		  <div class="col w33-full w33-1280 w100-1024">
			  
			  <div class="footer-map">
				  
				  <?php snippet('map', array('page'=> page('contact'))) ?>
				  
			  </div>
			  
		  </div>
		  
	  </div>

  </footer>

</body>
</html>