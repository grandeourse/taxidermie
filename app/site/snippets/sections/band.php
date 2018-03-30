<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?>">
  
  <?php if($page->hasImages()): ?><div class="band-image"><img src="<?php echo $page->images()->first()->url() ?>"></div><?php endif ?>
  
  <div class="band-content">
	  
	  <?php echo $page->text()->kirbytext() ?>
	  
  </div>
  
</section>