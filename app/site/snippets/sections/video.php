<?php if($page->idvideo() != ""): ?>
	
	<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?>" <?php if($page->hasImages()): ?>style="background-image: url(<?php echo $page->images()->first()->url() ?>);"<?php endif ?>>
	  
	  <div class="video-content">
	  
	  	<iframe src="https://www.youtube.com/embed/<?php echo $page->idvideo() ?>?autoplay=0&amp;rel=0" frameborder="0" allowfullscreen=""></iframe>
	  
	  </div>
	  
	</section>

<?php endif ?>