<?=View::factory('Header')?>

<div class="col-md-9">
	<div class="row">
<?php
	foreach($results->mixes as $track):
	?>
	<?=View::factory('Tracks/TrackBlock', compact('track'))?>
	<?php endforeach; ?>
</div>
</div>

 <?=View::factory('Footer')?>
