<?php
  $seoPosition = optionGet('seo-position');
  $animation = optionGet('animation');
?>

<div class="content--text col-w4p1" <?php if ($animation) echo 'data-aos="zoom-out"'; ?>>
  <div class="textbox">
    <?php if (contentCheck('author')): ?>
      <?php contentCreate('author', 'span/text', 'auto', 'subline'); ?>
    <?php endif; ?>

    <?php if (contentCheck('quote')): ?>
      <?php contentCreate('quote', $seoPosition . '/text', 'auto', 'h2'); ?>
    <?php endif; ?>
  </div>
</div>

<div class="content--button col-w2p5" <?php if ($animation) echo 'data-aos="fade-right"'; ?>>
  <div class="buttonbox">
    <?php if (contentCheck('button')): ?>
      <?php contentCreate('button', 'buttongroup'); ?>
    <?php endif; ?>
  </div>
</div>