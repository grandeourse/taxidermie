<section id="<?php echo $page->uid() ?>" class="<?php echo $page->template() ?>" <?php if($page->hasImages()): ?>style="background-image: url(<?php echo $page->images()->first()->url() ?>);"<?php endif ?>>
  
  <div class="musique-content">
  	
  	<iframe style="border: 0; width: 350px; height: 555px;" src="https://bandcamp.com/EmbeddedPlayer/album=2731590863/size=large/bgcol=333333/linkcol=ffffff/transparent=true/" seamless><a href="http://grandeourse.bandcamp.com/album/petit-demo">Petit Demo by Grande Ourse</a></iframe>
  
  </div>
  
</section>