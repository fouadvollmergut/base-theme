<?php

  add_action ('gdymc_module_options_settings', function ( $module ) {
    if ($module->type == gdymc_module_name( __FILE__ )):

      optionInput( 'alignment', array(
        'type' => 'select',
        'default' => 'normal',
        'label' => __( 'Ausrichtung', 'Theme' ),
        'options' => array(
          'normal' => __( 'Text rechts', 'Theme' ),
          'reverse' => __( 'Text links', 'Theme' )
        )
      ), $module->id );

      optionInput( 'vertical', array(
        'type' => 'select',
        'default' => 'center',
        'label' => __( 'Vertikale Ausrichtung', 'Theme' ),
        'options' => array(
          'start' => __( 'Oben', 'Theme' ),
          'center' => __( 'Mitte', 'Theme' ),
          'end' => __( 'Unten', 'Theme' )
        )
      ), $module->id );
  
    endif;
  });

?>