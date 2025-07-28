<?php
  $layout = optionGet('layout');
  $alignment = optionGet('alignment');
  $elements = optionGet('elements');
  $elements = explode("\n", $elements);
  $seoPosition = optionGet('seo-position');
?>

<div class="content--text col-w2p1">
  <div class="textbox">
    <?php if (contentCheck('headline')): ?>
      <?php contentCreate('headline', $seoPosition . '/text', 'auto', 'h4'); ?>
    <?php endif; ?>

    <div>
      <?php if (contentCheck('copy')): ?>
        <?php contentCreate('copy', 'text'); ?>
      <?php endif; ?>

      <?php if (contentCheck('button')): ?>
        <?php contentCreate('button', 'buttongroup'); ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<ul class="content--columns <?php echo $alignment; ?> col-w4p3">
  <?php foreach ($elements as $key => $element): ?>
    <li class="column" data-key="<?php echo $key; ?>">
      <?php if ($layout === '2'): ?>
        <div class="column-header">
          <?php if (contentCheck('image_' . $key)): ?>
            <?php contentCreate('image_' . $key, 'image', 'autoxauto'); ?>
          <?php endif; ?>

          <?php if (contentCheck('headline_' . $key)): ?>
            <?php contentCreate('headline_' . $key, 'span/text', 'auto', 'subline'); ?>
          <?php endif; ?>
        </div>
      <?php else: ?>
          <?php if (contentCheck('headline_' . $key)): ?>
            <?php contentCreate('headline_' . $key, 'span/text', 'auto', 'h2'); ?>
          <?php endif; ?>
      <?php endif; ?>

      <div class="column-content">
        <?php if (contentCheck('copy_' . $key)): ?>
          <?php contentCreate('copy_' . $key, 'text'); ?>
        <?php endif; ?>

        <?php if (contentCheck('button_' . $key)): ?>
          <?php contentCreate('button_' . $key, 'buttongroup'); ?>
        <?php endif; ?>
      </div>
    </li>
  <?php endforeach; ?>
</ul>