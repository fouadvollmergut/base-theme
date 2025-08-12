<?php
  add_action ('gdymc_module_options_settings', function ( $module ) {
    if ($module->type == gdymc_module_name( __FILE__ )):

      optionInput( 'items', array(
        'type' => 'sortable',
        'label' => __( 'Auflistung der Accordion-Elemente', 'Theme' ),
      ), $module->id );

      optionInput( 'reverse', array(
        'type' => 'select',
        'default' => 'false',
        'label' => __( 'Spiegeln', 'Theme' ),
        'options' => array(
          'false' => __( 'Nein', 'Theme' ),
          'true' => __( 'Ja', 'Theme' )
        )
      ), $module->id );

      optionInput( 'list-only', array(
        'type' => 'select',
        'default' => '',
        'label' => __( 'Listenmodus', 'Theme' ),
        'options' => array(
          '' => __( 'Nein', 'Theme' ),
          'disabled' => __( 'Ja', 'Theme' )
        )
      ), $module->id );

    endif;
  });

?>