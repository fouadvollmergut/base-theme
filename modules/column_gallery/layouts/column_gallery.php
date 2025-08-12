<?php
  $seoPosition = optionGet('seo-position');
  $animation = optionGet('animation');
  $items = optionGet('items');
  $items = explode(',', $items);
?>

<div class="content--text col-w6p1">
    <?php if (contentCheck('headline')): ?>
      <div class="textbox">
        <?php contentCreate('headline', $seoPosition . '/text', 'auto', 'h4'); ?>
      </div>
    <?php endif; ?>
</div>

<div class="content--gallery col-w6p1">
  <div class="column-gallery--container swiper">
    <div class="swiper-wrapper">
      <?php foreach ($items as $item): ?>
        <div class="swiper-slide gdymc_sortable_item" data-name="<?php echo substr(str_replace('-', '', $item), 0, 8); ?>">
          <?php if (contentCheck('image-' . $item)): ?>
            <div class="imagebox">
              <?php contentCreate('image-' . $item, 'image', 'autoxauto'); ?>
            </div>
          <?php endif; ?>
          

          <div class="swiper-slide-content">
            <?php if (contentCheck('headline-' . $item)): ?>
              <div class="textbox">
                <?php contentCreate('headline-' . $item, 'span/text', 'auto', 'card-headline'); ?>
              </div>
            <?php endif; ?>
            
            <?php if (contentCheck('copy-' . $item)): ?>
              <div class="textbox">
                <?php contentCreate('copy-' . $item, 'text'); ?>
              </div>
            <?php endif; ?>
            
            <?php if (contentCheck('button-' . $item)): ?>
              <div class="buttonbox">
                <?php contentCreate('button-' . $item, 'buttongroup'); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="content--controls">
    <div class="controlsbox">
      <div class="swiper-button-prev">
        <div class="fa-solid fa-chevron-left"></div>
      </div>
      <div class="swiper-button-next">
        <div class="fa-solid fa-chevron-right"></div>
      </div>
    </div>
  </div>
</div>

