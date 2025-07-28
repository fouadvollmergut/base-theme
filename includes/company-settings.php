<?php
  add_action('admin_init', 'custom_company_section');  

  function custom_company_section() {  
      add_settings_section(  
          'custom_company_information_section',
          'Company Informations',
          'custom_company_information_section_callback',
          'general'
      );
      
      add_settings_field(
          'custom_company_information', 
          'Company Information',
          'custom_company_information_callback',
          'general',
          'custom_company_information_section',
          array( 'custom_company_information')  
      );
      
      register_setting('general', 'custom_company_information');
  }

  function custom_company_information_section_callback() {
      echo '<p>Company Information shown in the footer of the website.</p>';  
  }

  function custom_company_information_callback($args) {  // Textbox Callback
    
    $settings = array( 'media_buttons' => false, 'quicktags' => false );
    $content = get_option($args[0]);
    $editor_id = 'custom_company_information';
    wp_editor($content, $editor_id, $settings);
}