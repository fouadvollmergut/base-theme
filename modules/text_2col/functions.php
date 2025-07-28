<?php

  add_action ('gdymc_module_options_settings', function ( $module ) {
    if ($module->type == gdymc_module_name( __FILE__ )):

      optionInput( 'layout', array(
        'type' => 'select',
        'default' => '1',
        'label' => __( 'Layout', 'Theme' ),
        'options' => array(
          '1' => __( 'Text | Text', 'Theme' ),
          '2' => __( 'Bild | Text', 'Theme' )
        )
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

    endif;
  });

?>