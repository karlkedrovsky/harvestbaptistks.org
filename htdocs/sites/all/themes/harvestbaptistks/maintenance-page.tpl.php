<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>">
  <div id="page" class="container_12">
    <div id="header" class="clearfix">
      <?php if ($site_name): ?>
        <div id="site-name" class="<?php print ($site_slogan) ? 'grid_9' : 'grid_12'; ?>"><a href="/"><span class="orange">Harvest</span> <span class="dark-grey">Baptist Church</span><?php //print $site_name; ?></a></div>
      <?php endif; ?>
      <?php if ($site_slogan): ?>
        <div id="site-slogan" class="<?php print ($site_name) ? 'grid_3' : 'grid_12'; ?>"><p><?php print $site_slogan; ?></p></div>
      <?php endif; ?>
    </div>
    <div id="content-middle" class="clearfix">
      <div class="grid_12">
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>      
        <?php print $messages; ?>
        <?php print render($page['help']); ?>
        <div id="main-content">
          <?php print $content; ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
