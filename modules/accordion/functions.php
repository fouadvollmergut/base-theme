<?php
  add_action ('gdymc_module_options_settings', function ( $module ) {
    if ($module->type == gdymc_module_name( __FILE__ )):

      optionInput( 'elements', array(
        'type' => 'textarea',
        'label' => __( 'Auflistung der Akkordion-Elemente', 'Theme' ),
        'description' => __( 'Jedes Element in einer neuen Zeile. Elemente dürfen sich nicht doppeln.', 'Theme' ),
        'placeholder' => __( 'Headline 1', 'Theme' ) . "\n" . __( 'Headline 2', 'Theme' ) . "\n" . __( 'Headline 3', 'Theme' )
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