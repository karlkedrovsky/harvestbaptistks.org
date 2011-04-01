<?php
function harvestbaptistks_preprocess_node(&$variables) {
  //if ($variables['teaser']) {
   $variables['submitted'] = t('Submitted by<br/>!username<br/>!datetime', array('!username' => $variables['name'], '!datetime' => $variables['date']));
  //}
}

// function bartik_preprocess_node(&$variables) {
//   $variables['submitted'] = t('published by !username on !datetime', array('!username' => $variables['name'], '!datetime' => $variables['date']));
//   if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
//     $variables['classes_array'][] = 'node-full';
//   }
// }
