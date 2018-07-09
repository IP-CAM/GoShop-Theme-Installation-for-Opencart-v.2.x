<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["popup_id_module"] = 11;
$output["popup_module"] = array (
  1 => 
  array (
    'type' => '1',
    'newsletter_popup_title' => 
    array (
      1 => 'Newsletter',
      $language_id => 'Newsletter',
    ),
    'newsletter_popup_text' => 
    array (
      1 => 'Did you know that we ship to over <span>24 different countries</span>',
      $language_id => 'Did you know that we ship to over <span>24 different countries</span>',
    ),
    'newsletter_input_placeholder' => 
    array (
      1 => 'Enter your email address',
      $language_id => 'Enter your email address',
    ),
    'newsletter_subscribe_button_text' => 
    array (
      1 => 'Subscribe',
      $language_id => 'Subscribe',
    ),
    'custom_popup_title' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'custom_popup_text' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'contact_form_popup_title' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'module_id' => '1',
    'show_only_once' => '1',
    'display_text_dont_show_again' => '1',
    'text_dont_show_again' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'display_buttons_yes_no' => '1',
    'no' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'yes' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'content_width' => '870',
    'background_color' => '#fff',
    'background_image' => 'catalog/bg-newsletter-fashion.jpg',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'show_after' => '500',
    'autoclose_after' => '',
    'disable_on_desktop' => '0',
    'layout_id' => '1',
    'position' => 'popup',
    'status' => '1',
    'sort_order' => '0',
  ),
); 

$this->model_setting_setting->editSetting( "popup", $output );	

?>