<?php
if(isset($messages) && is_array($messages)):
foreach($messages as $message):?>
<div class="message"><?=(is_array($message) ? __($message['message']) : $message)?></div>
<? endforeach; ?>
<?php endif;?>