<?php
  $layout = optionGet('layout');
?>

<section class="grid module">
  <div class="subgrid text-text end">
    <?php if ($layout === '1'): ?>
      <?php include 'layouts/text-text.php'; ?>
    <?php elseif ($layout === '2'): ?>
      <?php include 'layouts/image-text.php'; ?>
    <?php endif; ?>
  </div>
</section>