<?php

/**
 * @file
 * template.php
 */


 function rcl_drupal_theme_preprocess_page(&$variables) {
   if ($variables['node']->type == "event") {
     $variables['template_files'][] = 'page-node-event';
   }
 }



?>
