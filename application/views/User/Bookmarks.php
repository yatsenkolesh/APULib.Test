<div class="col-md-9">
<div class="row">
<div id="tracks-list-container">
<?php
 if(is_array($tracks) && sizeof($tracks)):
	foreach($tracks as $track):
	?>
	<?=View::factory('Tracks/TrackBlock', compact('track'))?>
	<?php endforeach; ?>
</div>
<?php else: ?>
<h3> <?=__('Ни один плейлист пока что вам не понравился')?> </h3>
<?php endif;?>
</div></div>