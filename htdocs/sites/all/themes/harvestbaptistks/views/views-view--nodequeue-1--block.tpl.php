<div class="<?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <?php if ($rows): ?>
    <div class="view-content">
      <?php print $rows; ?>
    </div>
  <?php endif; ?>
</div>

