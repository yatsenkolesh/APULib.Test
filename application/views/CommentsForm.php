<?php if(Model_User::isLogged()):?>
<div class="form-group">
  <label for="comment"><?=__('Комментарий')?>:</label>
  <form method="POST">
  <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
  <button type="submit" id="next-track" class="btn btn-primary" style="margin-top:10px;"><?=__('Оставить комментарий')?></button>
  </form>
</div>
<?php else: ?>
<div style="margin-bottom:20px;">
<?=__('Для того, чтобы оставить комментарий вам необходимо войти в свой аккаунт')?>
</div>
<?php endif; ?>