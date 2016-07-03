<?php if(!$isSuccessfull):?>
<div class="col-md-9">
<div class="row">
<h2><?=__('Вход')?></h2>
<form role="form" method="POST">
  <div class="form-group">
    <label for="login"><?=__('Логин')?></label>
    <input type="login" class="form-control" id="login" name="login">
  </div>
  <div class="form-group">
    <label for="pwd"><?=__('Пароль')?>:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">
  </div>
  <button type="submit" class="btn btn-default"><?=__('Войти')?></button>
</form>

<div style="margin-top:10px;"><?=__('Ещё не зарегистрированны ?')?> <a href="<?=Model_Tools::getUrl('user', 'signup')?>"><?=__('Просто сделайте это')?></a> </div>

</div>
</div>
<? endif; ?>