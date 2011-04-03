<?php
function harvestbaptistks_preprocess_node(&$variables) {
  if ($variables['teaser']) {
    $variables['submitted'] = t('Submitted by<br/>!username<br/>!datetime',
                              array('!username' => $variables['name'], '!datetime' => format_date($variables['created'], 'short')));
  }
}
