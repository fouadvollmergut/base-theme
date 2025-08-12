<?php 
  $elements = optionGet('items');
  $listOnly = optionGet('list-only');
?>

<?php if (!$elements): ?>

  <?php optionError( __( 'Akkordion-Elemente in den Moduleinstellungen hinzufügen', 'Theme' ) ); ?>

<?php else: ?>

  <section class="grid module">
    <div class="subgrid accordion end <?php echo $listOnly; ?>">
      <?php include 'layouts/accordion.php'; ?>
    </div>
  </section>

<?php endif; ?>