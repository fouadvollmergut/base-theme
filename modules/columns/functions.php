<?php

  add_action ('gdymc_module_options_settings', function ( $module ) {
    if ($module->type == gdymc_module_name( __FILE__ )):

      optionInput( 'elements', array(
        'type' => 'textarea',
        'label' => __( 'Auflistung der Spalten-Elemente', 'Theme' ),
        'description' => __( 'Jedes Element in einer neuen Zeile. Elemente dürfen sich nicht doppeln.', 'Theme' ),
        'placeholder' => __( 'Headline 1', 'Theme' ) . "\n" . __( 'Headline 2', 'Theme' ) . "\n" . __( 'Headline 3', 'Theme' )
      ), $module->id );

      optionInput( 'alignment', array(
        'type' => 'select',
        'default' => 'horizontal',
        'label' => __( 'Ausrichtung', 'Theme' ),
        'options' => array(
          'horizontal' => __( 'Horizontal', 'Theme' ),
          'vertical' => __( 'Vertikal', 'Theme' )
        )
      ), $module->id );

      optionInput( 'layout', array(
        'type' => 'select',
        'default' => '2',
        'label' => __( 'Layout', 'Theme' ),
        'options' => array(
          '1' => __( 'Headline/Numbers', 'Theme' ),
          '2' => __( 'Image/Text', 'Theme' )
        )
      ), $module->id );

    endif;
  });

?>