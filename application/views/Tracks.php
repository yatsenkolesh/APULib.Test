<script src="/public/js/load-more-tracks.js"></script>
<div class="col-md-9">
	<div class="row">
        <div class="col-md-12">
    		<h2><?=__('Поиск плей-листов')?></h2>
			<form method="GET">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" name="q" value="<?=htmlspecialchars($query)?>" placeholder="<?=__('Введите название трека или исполнителя, напр.')?> Samaris" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
			</form>
        </div>

<!-- SHOW RESULTS OF SEARCH -->

<div id="type" style="display:none;"><?=$type?></div>
<div id="query" style="display:none;"><?=htmlspecialchars($query)?></div>


<div id="tracks-list-container">
<?php
 if(isset($results->mixes) && sizeof($results->mixes)):
	foreach($results->mixes as $track):
	?>
	<?=View::factory('Tracks/TrackBlock', compact('track'))?>
	<?php endforeach; ?>
</div>
<?php if(isset($results->next_page)):?>
<div class="load-more-block">
<button type="button" class="btn btn-success load-more" id="load-more"><?=__('Хочу видеть больше')?></button><?php endif;?>
</div>
<?php else :?>
<?php if($query):?>
<h4 style="text-align:Center;"><?=__('Грустно конечно, но мы не нашли ничего по вашему запросу.')?></h4>
<?php endif;?>
<?php endif;?>	
</div>
</div>