<?php 
  $seoPosition = optionGet('seo-position');
  $animation = optionGet('animation');
?>

<div class="content--text col-w2p1" <?php if ($animation) echo 'data-aos="fade-up"'; ?>>
  <div class="textbox">
    <?php if (contentCheck('headline')): ?>
      <?php contentCreate('headline', $seoPosition . '/text', 'auto', 'h4'); ?>
    <?php endif; ?>

    <?php if (contentCheck('button')): ?>
      <?php contentCreate('button', 'buttongroup'); ?>
    <?php endif; ?>
  </div>
</div>

<div class="content--text col-w4p3" <?php if ($animation) echo 'data-aos="fade-up" data-aos-delay="100"'; ?>>
  <div class="textbox">
    <?php if (contentCheck('copy')): ?>
      <?php contentCreate('copy', 'p/text'); ?>
    <?php endif; ?>
  </div>
</div>