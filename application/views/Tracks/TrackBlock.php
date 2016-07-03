<? $url = Model_Tools::getUrl('tracks', 'show', $track->id); ?>
<div class="track col-md-4 col-xs-12 col-sm-6 col-sm-height" style="float:left;">
<div class="image"><a href="<?=$url?>"> <img src="<?=$track->cover_urls->max200?>" width="250" height="250"></a></div>
<div class="title"><a href="<?=$url?>>"><?=$track->name?></a></div>
</div>