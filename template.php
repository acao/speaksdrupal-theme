<?php

/**
 * @file template.php
 */


function speaksdrupal_css_alter(&$css) {
	 $css['fontawesome'] = array(
      'data' => "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css",
      'type' => 'external',
      'every_page' => TRUE,
      'media' => 'all',
      'preprocess' => FALSE,
      'group' => CSS_THEME,
      'browsers' => array('IE' => TRUE, '!IE' => TRUE),
      'weight' => -2,
    );
}

function speaksdrupal_form_contact_form_entityform_edit_form_alter(&$form, &$form_state, $form_id){
  $form['actions']['submit']['#attributes']['class'] = array('btn', 'btn-primary', 'btn-lg');
  $form['actions']['submit']['#value'] = t('Contact Me <span class="fa fa-arrow-right"></span>');
  if(isset($GLOBALS['_REQUEST']['inquiry'])){
    $form['field_this_is_a_project_inquiry'][LANGUAGE_NONE]['#default_value'] = 1;
  }
}

function template_form_FORM_ID_alter(&$form, &$form_state, $form_id) {
  $form['actions']['submit']['#attributes']['class'] = array('btn', 'btn-primary', 'btn-lg');
}