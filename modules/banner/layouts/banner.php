<?php
  $seoPosition = optionGet('seo-position');
?>

<div class="content--text col-w6p1">
  <div class="textbox">
    <?php if (contentCheck('copy')): ?>
      <?php contentCreate('copy', $seoPosition .'/text', 'auto', 'h6'); ?>
    <?php endif; ?>

    <?php if (contentCheck('button')): ?>
      <?php contentCreate('button', 'buttongroup'); ?>
    <?php endif; ?>
  </div>
</div>