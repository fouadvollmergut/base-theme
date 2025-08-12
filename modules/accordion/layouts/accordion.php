<?php
  $seoPosition = optionGet('seo-position');
  $reverse = optionGet('reverse');
  $hideImage = optionGet('hideImage');
  $elements = optionGet('items');
  $elements = explode(",", $elements);
  $animation = optionGet('animation');
  $listOnly = optionGet('list-only');

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

<div class="content--text <?php echo 'col-' . $elm2col; ?>" <?php if ($animation) echo 'data-aos="fade-up"'; ?>>
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

<ul 
  class="accordion-container <?php echo 'col-' . $elm1col; ?>"
  <?php if ($animation) echo 'data-aos="fade-up" data-aos-delay="100"'; ?>
>
  <?php foreach ($elements as $key => $element): ?>
    <?php $element = explode(":", $element); ?>
    <li 
      class="accordion-outer gdymc_sortable_item"
      data-name="<?php echo substr(str_replace('-', '', $element[0]), 0, 8); ?>"
      data-key="<?php echo $element[0]; ?>"
      <?php if (!$listOnly) echo 'itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"'; ?>
    >
      <div class="accordion-header">
        <div 
          class="accordion-headline"
          <?php if (!$listOnly) echo 'itemprop="name"'; ?>
        >
          <?php if (contentCheck('title_' . $element[0])): ?>
            <?php contentCreate('title_' . $element[0], 'span/text', 'auto', 'accordion-title'); ?>
          <?php endif; ?>
        </div>
        <span></span>
      </div>

      <div 
        class="accordion-inner"
        <?php if (!$listOnly) echo 'itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer"'; ?>
      >
        <div
          <?php if (!$listOnly) echo 'itemprop="text"'; ?>
        >
          <?php if (contentCheck('copy_' . $element[0])): ?>
            <?php contentCreate('copy_' . $element[0], 'span/text'); ?>
          <?php endif; ?>
        </div>

        <?php if (contentCheck('button_' . $element[0])): ?>
          <?php contentCreate('button_' . $element[0], 'buttongroup'); ?>
        <?php endif; ?>
      </div>
    </li>
  <?php endforeach; ?>
</ul>