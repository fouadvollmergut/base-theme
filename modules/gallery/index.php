<?php 
  $animation = optionGet('animation');
  $slides = optionGet('slides');
  $slides = $slides ? $slides : 1;
?>

<section class="module grid">
  <div class="subgrid gallery swiper end" data-slides="<?php echo $slides; ?>" <?php if ($animation) echo 'data-aos="fade-up"'; ?>>
    <?php include 'layouts/gallery.php'; ?>
  </div>
</section>