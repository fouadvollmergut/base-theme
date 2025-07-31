<?php
  $reverse = optionGet('reverse');
  $seoPosition = optionGet('seo-position');

  $elm1col = '';
  $elm2col = '';

    if ($reverse === 'true') {
      $elm1col = 'w4p3';
      $elm2col = 'w2p1';
    } else {
      $elm1col = 'w4p1';
      $elm2col = 'w2p5';
    }
?>

<div class="content--text <?php echo 'col-' . $elm2col; ?>">
  <div class="imagebox">
    <?php if (contentCheck('image')): ?>
      <?php contentCreate('image', 'image', 'autoxauto'); ?>
    <?php endif; ?>
  </div>
</div>

<div class="content--text <?php echo 'col-' . $elm1col; ?>">
  <div class="textbox">
    <div class="textbox-inner">
      <?php if (contentCheck('headline')): ?>
        <?php contentCreate('headline', $seoPosition . '/text', 'auto', 'h4'); ?>
      <?php endif; ?>

      <?php if (contentCheck('copy-1')): ?>
        <?php contentCreate('copy-1', 'text'); ?>
      <?php endif; ?>
    </div>

    <?php if (contentCheck('button-1')): ?>
      <?php contentCreate('button-1', 'buttongroup'); ?>
    <?php endif; ?>
  </div>
</div>