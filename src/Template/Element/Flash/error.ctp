<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div>

<!-- <div class="alert alert-warning" role="alert" margin-top="300">
  <strong>Warning!</strong> <?= $message ?>
</div> -->

