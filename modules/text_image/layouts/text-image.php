<?php
  $reverse = optionGet('reverse');
  $seoPosition = optionGet('seo-position');
  $animation = optionGet('animation');

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

<div class="content--text <?php echo 'col-' . $elm2col; ?>" <?php if ($animation) echo 'data-aos="fade-up"'; ?>>
  <div class="imagebox">
    <?php if (contentCheck('image')): ?>
      <?php contentCreate('image', 'image', 'autoxauto'); ?>
    <?php endif; ?>
  </div>
</div>

<div class="content--text <?php echo 'col-' . $elm1col; ?>" <?php if ($animation) echo 'data-aos="fade-up" data-aos-delay="100"'; ?>>
  <?php if (contentCheck('headline')): ?>
    <div class="textbox">
      <?php contentCreate('headline', $seoPosition . '/text', 'auto', 'h4'); ?>
    </div>
  <?php endif; ?>
  
  <div class="textbox-container">
    <div class="textbox-inner">
      <div class="textbox">
        <?php if (contentCheck('copy-1')): ?>
          <?php contentCreate('copy-1', 'text'); ?>
        <?php endif; ?>
      </div>

      <div class="textbox">
        <?php if (contentCheck('copy-2')): ?>
          <?php contentCreate('copy-2', 'text'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <?php if (contentCheck('button-1')): ?>
    <div class="textbox">
      <?php contentCreate('button-1', 'buttongroup'); ?>
    </div>
  <?php endif; ?>
</div>