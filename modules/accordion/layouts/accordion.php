<?php
  $seoPosition = optionGet('seo-position');
  $reverse = optionGet('reverse');
  $hideImage = optionGet('hideImage');
  $elements = optionGet('elements');
  $elements = explode("\n", $elements);

  $elm1col = '';
  $elm2col = '';

  if ($reverse === 'true') {
    $elm1col = 'w4p1';
    $elm2col = 'w2p5';
  } else {
    $elm1col = 'w4p3';
    $elm2col = 'w2p1';
  }
?>

<div class="content--text <?php echo 'col-' . $elm2col; ?>">
  <div class="textbox">
    <div>
      <?php if (contentCheck('headline')): ?>
        <?php contentCreate('headline', $seoPosition .'/text', 'auto', 'h4'); ?>
      <?php endif; ?>

      <?php if (contentCheck('copy')): ?>
        <?php contentCreate('copy', 'span/text'); ?>
      <?php endif; ?>
    </div>

    <?php if (contentCheck('button')): ?>
      <?php contentCreate('button', 'buttongroup'); ?>
    <?php endif; ?>
  </div>
</div>

<ul class="accordion-container <?php echo 'col-' . $elm1col; ?>">
  <?php foreach ($elements as $key => $element): ?>
    <li class="accordion-outer" data-key="<?php echo $key; ?>">
      <div class="accordion-header">
        <div class="subline"><?php echo $element; ?></div><span></span>
      </div>

      <div class="accordion-inner">
        <?php if (contentCheck('copy_' . $key)): ?>
          <?php contentCreate('copy_' . $key, 'span/text'); ?>
        <?php endif; ?>

        <?php if (contentCheck('button_' . $key)): ?>
          <?php contentCreate('button_' . $key, 'buttongroup'); ?>
        <?php endif; ?>
      </div>
    </li>
  <?php endforeach; ?>
</ul>