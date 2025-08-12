<?php 
  $elements = optionGet('items');
?>

<?php if (!$elements): ?>

  <?php optionError( __( 'Spalten-Elemente in den Moduleinstellungen hinzufügen', 'Theme' ) ); ?>

<?php else: ?>

  <section class="grid module">
    <div class="subgrid cards end">
      <?php include 'layouts/cards.php'; ?>
    </div>
  </section>

<?php endif; ?>