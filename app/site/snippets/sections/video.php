<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?>">
	  
  <?php /* TODO <a href="#taxidermie" class="godown">Visionner Taxidermie (Live Session)</a> */ ?>
  
  <div class="video-content">
  	
  	<?php if($page->idvideo() != ""): ?>
  	
  		<iframe src="https://www.youtube.com/embed/<?php echo $page->idvideo() ?>?autoplay=0&amp;rel=0" frameborder="0" allowfullscreen=""></iframe>
  		
  	<?php elseif($page->hasImages() != ""): ?>
  		
  		<img src="<?php echo $page->images()->first()->url() ?>">
  		
  	<?php endif ?>
  
  </div>
  
</section>