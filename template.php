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