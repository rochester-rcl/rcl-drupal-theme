<?php

/**
 * @file
 * template.php
 */


// Printing the author information
 function rcl_drupal_theme_preprocess_node(&$vars) {

 $vars['submitted'] =  t('By !username on !datetime',
         array(
         '!username' => $vars['name'],
         '!datetime' => $vars['date'],
         ));

         }



function rcl_drupal_theme_theme() {
  $items = array();

  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'rcl_drupal_theme') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
       'rcl_drupal_theme_preprocess_user_login'
    ),
  );
  $items['user_register_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'rcl_drupal_theme') . '/templates',
    'template' => 'user-register-form',
    'preprocess functions' => array(
      'rcl_drupal_theme_preprocess_user_register_form'
    ),
  );
  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'rcl_drupal_theme') . '/templates',
    'template' => 'user-pass',
    'preprocess functions' => array(
      'rcl_drupal_theme_preprocess_user_pass'
    ),
  );
  return $items;
}
?>


<?php
function rcl_drupal_theme_preprocess_user_login(&$vars) {
  $vars['intro_text'] = t('This is my awesome login form');
}

function rcl_drupal_theme_preprocess_user_register_form(&$vars) {
  $vars['intro_text'] = t('This is my super awesome reg form');
}

function rcl_drupal_theme_preprocess_user_pass(&$vars) {
  $vars['intro_text'] = t('This is my super awesome request new password form');
}
?>
