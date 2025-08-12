<?php
  $elements = optionGet('items');
  $animation = optionGet('animation');
  $slides = optionGet('slides');
  $slides = $slides ? $slides : 1;
?>

<?php if (!$elements): ?>

  <?php optionError( __( 'Galerie-Elemente in den Moduleinstellungen hinzufügen', 'Theme' ) ); ?>

<?php else: ?>

  <section class="grid module">
    <div class="subgrid column-gallery end" data-slides="<?php echo $slides; ?>" <?php if ($animation) echo 'data-aos="fade-up"'; ?>>
      <?php include 'layouts/column_gallery.php'; ?>
    </div>
  </section>

<?php endif; ?>