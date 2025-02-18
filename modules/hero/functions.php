<?php

  add_action ('gdymc_module_options_settings', function ( $module ) {
    if ($module->type == gdymc_module_name( __FILE__ )):

      optionInput( 'occupancy', array(
        'type' => 'select',
        'default' => false,
        'label' => __( 'Ausgebucht', 'Theme' ),
        'options' => array(
          true => __( 'Ja', 'Theme' ),
          false => __( 'Nein', 'Theme' )
        )
      ), $module->id );

    endif;
  });

?>