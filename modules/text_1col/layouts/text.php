<?php 
  $seoPosition = optionGet('seo-position');
?>

<div class="content--text col-w2p1">
  <div class="textbox">
    <?php if (contentCheck('headline')): ?>
      <?php contentCreate('headline', $seoPosition . '/text', 'auto', 'h4'); ?>
    <?php endif; ?>

    <?php if (contentCheck('button')): ?>
      <?php contentCreate('button', 'buttongroup'); ?>
    <?php endif; ?>
  </div>
</div>

<div class="content--text col-w4p3">
  <div class="textbox">
    <?php if (contentCheck('copy')): ?>
      <?php contentCreate('copy', 'p/text'); ?>
    <?php endif; ?>
  </div>
</div>