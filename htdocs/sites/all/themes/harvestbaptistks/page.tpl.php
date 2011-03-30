<div id="page" class="container_12">

  <div id="header" class="grid_12 clearfix">
    <?php if ($site_name): ?>
      <div id="site-name"><span class="orange">Harvest</span> <span class="dark-grey">Baptist Church</span><?php //print $site_name; ?></div>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <div id="site-slogan"><?php print $site_slogan; ?></div>
    <?php endif; ?>
  </div>

  <?php if ($main_menu): ?>
    <div id="primary-nav" class="grid_12 clearfix">
      <?php print theme('links', array('links' => $main_menu)); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['content_top']): ?>
    <div id="content-top" class="grid_12 clearfix">
        <?php print render($page['content_top']); ?>
    </div>
  <?php endif; ?>

  <div id="content-middle" class="clearfix">
    <?php if ($page['sidebar']): ?>
      <div class="grid_9">
    <?php else: ?>
      <div class="grid_12">
    <?php endif; ?>
      <?php //print $breadcrumb; ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>      
      <?php if ($tabs): ?>
        <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php print render($page['help']); ?>
      <div id="main-content">
        <?php print render($page['content']); ?>
      </div>
    </div>
    <?php if ($page['sidebar']): ?>
      <div class="grid_3">
        <?php print render($page['sidebar']); ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if ($page['content_bottom']): ?>
    <div id="content-bottom" class="clearfix">
      <?php foreach($page['content_bottom'] as $element): ?>
        <div class="grid_4">
          <?php if (is_array($element) && !empty($element['#markup'])) { print render($element); } ?>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
  
  <?php if ($page['footer']): ?>
    <div id="footer" class="clearfix">
      <?php print render($page['footer']); ?>
    </div>
  <?php endif; ?>
  
</div>

