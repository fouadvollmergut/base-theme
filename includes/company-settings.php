<?php
  add_action('admin_init', 'my_general_section');  

  function my_general_section() {  
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
      
      register_setting('general','custom_company_information', 'esc_attr');
  }

  function custom_company_information_section_callback() {
      echo '<p>Company Information shown in the footer of the website.</p>';  
  }

  function custom_company_information_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<textarea id="'. $args[0] .'" name="'. $args[0] .'" rows="5" style="width: 100%;">' . $option . '</textarea>';
}