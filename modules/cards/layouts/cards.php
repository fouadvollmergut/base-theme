<?php
  $layout = optionGet('layout');
  $alignment = optionGet('alignment');
  $elements = optionGet('items');
  $elements = explode(",", $elements);
  $seoPosition = optionGet('seo-position');
  $animation = optionGet('animation');
?>

<div class="content--text col-w2p1" <?php if ($animation) echo 'data-aos="fade-up"'; ?>>
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

<ul class="content--cards <?php echo $alignment; ?> col-w4p3">
  <?php foreach ($elements as $element): ?>
    <li class="card gdymc_sortable_item" data-name="<?php echo substr(str_replace('-', '', $element), 0, 8); ?>" data-key="<?php echo $element; ?>" <?php if ($animation) echo 'data-aos="fade-up" data-aos-delay="' . (intval($key) % 2 * 100) . '"'; ?>>
      <?php if ($layout === '2'): ?>
        <div class="card-header">
          <?php if (contentCheck('image_' . $element)): ?>
            <?php contentCreate('image_' . $element, 'image', 'autoxauto'); ?>
          <?php endif; ?>

          <?php if (contentCheck('headline_' . $element)): ?>
            <div class="textbox">
              <?php contentCreate('headline_' . $element, 'span/text', 'auto', 'card-headline'); ?>
            </div>
          <?php endif; ?>
        </div>
      <?php else: ?>
          <?php if (contentCheck('headline_' . $element)): ?>
            <?php contentCreate('headline_' . $element, 'span/text', 'auto', 'card-headline-numbers'); ?>
          <?php endif; ?>
      <?php endif; ?>

      <div class="card-content">
        <?php if (contentCheck('copy_' . $element)): ?>
          <?php contentCreate('copy_' . $element, 'text'); ?>
        <?php endif; ?>

        <?php if (contentCheck('button_' . $element)): ?>
          <?php contentCreate('button_' . $element, 'buttongroup'); ?>
        <?php endif; ?>
      </div>
    </li>
  <?php endforeach; ?>
</ul>