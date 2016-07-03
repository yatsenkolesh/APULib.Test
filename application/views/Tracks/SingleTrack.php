<?php $isBookmark = sizeof(Model_Bookmarks::instance()->isBookmark($track->id)); 
?>

<div class="row col-md-9">
<script src="/public/js/play.js"></script>

<div class="col-md-12">
<div class="cover"><img src="<?=$track->cover_urls->sq500?>"></div>
<div class="description">

<div> <?=$track->description_html?></div>

<?php if(Model_User::isLogged()):?>
<button type="button" id="add-to-bookmarks" class="btn btn-primary" 
 <?php if($isBookmark):?>disabled="disabled"<?php endif;?>><?=__($isBookmark ? 'Вам это понравилось' : 'Мне понравилось !')?></button>
<?php endif;?>
 
</div>

<div class="clearfix"></div>


<div id="language" style="display:none;"><?=Model_Language::instance()->getCurrentLanguage()?></div>
<div id="mix-id" style="display:none;"><?=$track->id?></div>
<div id="token" style="display:none;"><?=$token?></div>
<? //нужно было реализовать подгрузку языковых пакетов JS-ом ?>
<div id="add-to-bookmarks-message-ok" style="display:none"><?=__('Вам это понравилось')?></div>

<div id="song-name"><?=$play->set->track->performer?> - <?=$play->set->track->name?></div>



<div class="col-md-4">
<audio controls id="audio" src="<?=$play->set->track->url?>"></audio>
</div>

<div class="col-md-4" style="float:right;margin-right:10%">
<button type="button" id="next-track" class="btn btn-primary" style=""><?=__('Следующий трек')?></button>
</div>

</div>

<div class="col-md-8" style="margin-top:20px;">
<?=View::factory('CommentsForm')?>


<?php foreach($comments as $comment):?>

<?=View::factory('comment', compact('comment'))?>

<?php endforeach; ?>
</div>


</div>  
