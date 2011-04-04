<?php
function harvestbaptistks_preprocess_node(&$variables) {
  $u = user_load($variables['uid']);
  if (!empty($u->field_first_name['und'][0]['safe_value']) || !empty($u->field_last_name['und'][0]['safe_value'])) {
    $real_name =  $u->field_first_name['und'][0]['safe_value']. ' ' . $u->field_last_name['und'][0]['safe_value'];
    // the code below will create a link to the user. For no we just display the name.
    // $name = theme_username(array('account' => $u, 'name' => $real_name, 'link_path' => 'users/' . $u->name, 'extra' => '', 'link_options' => array()));
    $name = $real_name;
  } else {
    $name = $variables['name'];
  }
  if ($variables['teaser']) {
    $variables['submitted'] = t('Submitted by<br/>!username<br/>!datetime',
                              array('!username' => $name, '!datetime' => format_date($variables['created'], 'short')));
  } else {
    $variables['submitted'] = t('Submitted by !username !datetime',
                              array('!username' => $name, '!datetime' => format_date($variables['created'], 'short')));
  }
}
