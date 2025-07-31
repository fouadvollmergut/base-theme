<?php 
  $layout = optionGet('layout');
  $animation = optionGet('animation');
?>

<section class="grid module" <?php if ($animation) echo 'data-aos="fade-up"'; ?>>
  <?php include 'layouts/image.php'; ?>
</section>