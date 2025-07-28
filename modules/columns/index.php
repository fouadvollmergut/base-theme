<?php 
  $elements = optionGet('elements');
?>

<?php if (!$elements): ?>

  <?php optionError( __( 'Spalten-Elemente in den Moduleinstellungen hinzufügen', 'Theme' ) ); ?>

<?php else: ?>

  <section class="grid module">
    <div class="subgrid columns end">
      <?php include 'layouts/columns.php'; ?>
    </div>
  </section>

<?php endif; ?>