<?php snippet('header') ?>

<?php if($banner == true): ?>
	
	<?php snippet('sections/banner') ?>
	
<?php endif ?>

<?php snippet('main') ?>

<?php snippet('cta', array('page'=> page('cta'))) ?>

<?php snippet('footer') ?>