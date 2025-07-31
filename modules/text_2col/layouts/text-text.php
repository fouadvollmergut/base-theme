<?php
  $reverse = optionGet('reverse');
  $seoPosition = optionGet('seo-position');
  $animation = optionGet('animation');

  $elm1col = '';
  $elm2col = '';

    if ($reverse === 'true') {
      $elm1col = 'w2p5';
      $elm2col = 'w2p3';
    } else {
      $elm1col = 'w2p3';
      $elm2col = 'w2p5';
    }
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

<div class="content--text <?php echo 'col-' . $elm2col; ?>" <?php if ($animation) echo 'data-aos="fade-up" data-aos-delay="100"'; ?>>
  <div class="textbox">
    <?php if (contentCheck('copy-2')): ?>
      <?php contentCreate('copy-2', 'text'); ?>
    <?php endif; ?>
  </div>
</div>

<div class="content--text <?php echo 'col-' . $elm1col; ?>" <?php if ($animation) echo 'data-aos="fade-up" data-aos-delay="100"'; ?>>
  <div class="textbox">
    <?php if (contentCheck('copy-1')): ?>
      <?php contentCreate('copy-1', 'text'); ?>
    <?php endif; ?>
  </div>
</div>