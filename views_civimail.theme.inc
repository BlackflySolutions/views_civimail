<?php

/**
 * @file
 * Theme for civimail views.
 */
function template_preprocess_views_view_civimail(&$variables) {
  // this is just a copy of template_preprocess_views_view_unformatted($variables);
  // except for skipping the classes, which I shouldn't allow configuration of anyway
  $rows = $variables['rows'];
  foreach ($rows as $id => $row) {
    $variables['rows'][$id] = [];
    $variables['rows'][$id]['content'] = $row;
    $variables['rows'][$id]['attributes'] = new Attribute();
  } 
}
