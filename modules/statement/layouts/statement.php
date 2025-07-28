<?php
  $seoPosition = optionGet('seo-position');
?>

<div class="content--text col-w4p1">
  <div class="textbox">
    <?php if (contentCheck('author')): ?>
      <?php contentCreate('author', 'span/text', 'auto', 'subline'); ?>
    <?php endif; ?>

    <?php if (contentCheck('quote')): ?>
      <h2><?php contentCreate('quote', $seoPosition . '/text', 'auto', 'h2'); ?></h2>
    <?php endif; ?>
  </div>
</div>

<div class="content--button col-w2p5">
  <div class="buttonbox">
    <?php if (contentCheck('button')): ?>
      <?php contentCreate('button', 'buttongroup'); ?>
    <?php endif; ?>
  </div>
</div>