<?php 
  $occupancy = optionGet('occupancy');
?>

<section class="module <?php echo $background; ?>">
  <div class="grid hero end">
  <div class="content--text col-w2p1">
      <div class="textbox">
        <?php if (contentCheck('subhead')): ?>
          <h2><?php contentCreate('subhead', 'text'); ?></h2>
        <?php endif; ?>

        <?php if (contentCheck('head')): ?>
          <h1><?php contentCreate('head', 'text'); ?></h1>
        <?php endif; ?>
      </div>
    </div>

    <div class="content--image">
      <?php if (contentCheck('image')): ?>
        <?php contentCreate('image', 'image', 'autoxauto'); ?>
      <?php endif; ?>
    </div>
  </div>
</section>