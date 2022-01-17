<?php

/**
 * @file Add Views module hooks to Views CiviMail
 */
 
/**
 * Implementation of hook_views_plugins().
 */
function views_civimail_views_plugins() {
  $path = drupal_get_path('module', 'views_civimail');
  
  return array(
    'style' => array(
      'views_civimail' => array(
        'title' => t('Views CiviMail'),
        'help' => t('Display view in CiviMail.'),
        'handler' => 'views_plugin_style_civimail',
        'path' => "$path/views",
        'theme' => 'views_view_civimail',
        'uses row plugin' => TRUE,
        'uses options' => TRUE,
        'uses grouping' => FALSE,
        'type' => 'normal',
      ),
    ),
  );
}

