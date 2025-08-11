<?php

  add_action ('gdymc_module_options_settings', function ( $module ) {
    if ($module->type == gdymc_module_name( __FILE__ )):

      optionInput( 'slides', array(
        'type' => 'select',
        'default' => 1,
        'label' => __( 'Slides pro Ansicht', 'Theme' ),
        'options' => array(
          1 => __( '1', 'Theme' ),
          2 => __( '2', 'Theme' ),
          3 => __( '3', 'Theme' ),
        )
      ), $module->id );

    endif;
  });

?>