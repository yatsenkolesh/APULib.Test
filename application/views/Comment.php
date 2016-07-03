<div class="comment">
<div class="login"><?=Arr::get(Model_User::instance()->getUserByID($comment['user_id']),'login',NULL)?>
 <?=__('в')?> <?=Model_Tools::getDate($comment['date'])?> <?=__('прокомментировал')?>:</div>
<div class="message"><?=htmlspecialchars($comment['message'])?></div>
</div>