<?php 
  $animation = optionGet('animation');
?>

<section class="module grid">
  <div class="subgrid gallery swiper end" <?php if ($animation) echo 'data-aos="fade-up"'; ?>>
    <?php include 'layouts/gallery.php'; ?>
  </div>
</section>