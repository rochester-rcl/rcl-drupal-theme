<?php

/**
 * @file
 * template.php
 */

 function rcl_drupal_theme_preprocess_node(&$vars) {

 $vars['submitted'] =  t('By !username on !datetime',
         array(
         '!username' => $vars['name'],
         '!datetime' => $vars['date'],
         ));

         }

?>
