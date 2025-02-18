<?php 
  $alignment = optionGet('alignment');
  $vertical = optionGet('vertical');
?>

<section class="module pt pb <?php echo $background; ?>">
  <div class="grid inhalt_gross <?php echo $alignment; ?> <?php echo $vertical; ?>">
    <?php if (contentCheck('image')): ?>
      <div class="content--image col-w2p1">
        <?php contentCreate('image', 'image', '1000x1200'); ?>
      </div>
    <?php endif; ?>

    <div class="content--text col-w1p4">
      <div class="textbox">
        <?php if (contentCheck('head')): ?>
          <h2><?php contentCreate('head', 'text'); ?></h2>
        <?php endif; ?>

        <?php if (contentCheck('copy')): ?>
          <?php contentCreate('copy', 'text'); ?>
        <?php endif; ?>

        <?php if (contentCheck('button')): ?>
          <?php contentCreate('button', 'buttongroup'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


