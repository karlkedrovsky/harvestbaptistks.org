<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php
    // We hide the files, comments and links now so that we can render outside the normal content.
    hide($content['field_teaching_notes']);
    hide($content['field_audio_file']);
    hide($content['comments']);
    hide($content['links']);
  ?>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($view_mode == 'full' && $display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php if ($view_mode == 'teaser' && $display_submitted && !$is_front): ?>
      <div class="submitted">
        <?php print $submitted; ?>
      </div>
      <div class="content-inner with-submitted">
    <?php else: ?>
      <div class="content-inner">
    <?php endif; ?>
      <?php if ($view_mode == 'full' && 
        (isset($content['field_teaching_notes']['#object']) ||
         isset($content['field_audio_file']['#object']))): ?>
        <div class="downloadable-files">
          <h3>Dowloads</h3>
          <ul>
            <?php if (isset($content['field_teaching_notes'])): ?>
              <li><?php print render($content['field_teaching_notes']); ?></li>
            <?php endif; ?>
            <?php if (isset($content['field_audio_file'])): ?>
              <li><?php print render($content['field_audio_file']); ?></li>
            <?php endif; ?>
          </ul>
        </div>
      <?php endif; ?>
      <div class="content-node">
        <?php
          print render($content);
          print render($content['links']); 
        ?>
      </div>
    </div>
  </div>

  <?php print render($content['comments']); ?>

</div>
