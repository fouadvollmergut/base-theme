<?php

  add_action( 'gdymc_module_options_settings', function ( $module ) {
    $defaultRecipient = get_option('fvt_ct_mail_recipient');

    if( $module->type == gdymc_module_name( __FILE__ ) ):
      optionInput( 'subject', array(
        'type' => 'text',
        'label' => __( 'Betreff', 'Theme' ),
        'default' => 'Neue Nachricht von der Website',
      ), $module->id );

      optionInput( 'recipient', array(
        'type' => 'text',
        'label' => __( 'Empfänger', 'Theme' ),
        'default' => $defaultRecipient
      ), $module->id );

      optionInput( 'labels', array(
        'type' => 'select',
        'default' => false,
        'label' => __( 'Labels anzeigen', 'Theme' ),
        'options' => array(
          true => __( 'Ja', 'Theme' ),
          false => __( 'Nein', 'Theme' ),
        ),
      ), $module->id );
    endif;
  });

?>