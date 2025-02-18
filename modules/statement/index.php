<?php 
  $alignment = optionGet('alignment');
  $vertical = optionGet('vertical');
?>

<section class="module pt pb <?php echo $background; ?>">
  <div class="grid statement <?php echo $alignment; ?> <?php echo $vertical; ?>">
    <?php if (contentCheck('image')): ?>
      <div class="content--image col-w1p1">
        <?php contentCreate('image', 'image', '500x500'); ?>
      </div>
    <?php endif; ?>

    <div class="content--text col-w2p3">
      <div class="textbox">
        <?php if (contentCheck('quote')): ?>
          <q><?php contentCreate('quote', 'text'); ?></q>
        <?php endif; ?>

        <?php if (contentCheck('author')): ?>
          <?php contentCreate('author', 'text'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


