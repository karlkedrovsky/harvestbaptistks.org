<?php
function harvestbaptistks_preprocess_node(&$variables) {
  $u = user_load($variables['uid']);
  if (!empty($u->first_name) || !empty($u->last_name)) {
    $name = $u->first_name . ' ' . $u->last_name;
  } else {
    $name = $variables['name'];
  }
  if ($variables['teaser']) {
    $variables['submitted'] = t('Submitted by<br/>!username<br/>!datetime',
                              array('!username' => $name, '!datetime' => format_date($variables['created'], 'short')));
  }
}
