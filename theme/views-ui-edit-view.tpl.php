<?php
// $Id: views-ui-edit-view.tpl.php,v 1.1 2008-02-15 04:11:48 merlinofchaos Exp $
/**
 * @file views-ui-edit-view.tpl.php
 * Template for the primary view editing window.
 */
?>

<div class="views-basic-info<?php if (!empty($view->changed)) { print " changed"; }?>">
  <?php if (!is_numeric($view->vid)): ?>
    <div class="view-changed view-new"><?php print t('New view'); ?></div>
  <?php else: ?>
    <div class="view-changed"><?php print t('Changed view'); ?></div>
  <?php endif; ?>
  <?php print t('View %name, displaying items of type <b>@base</b>.',
      array('%name' => $view->name, '@base' => $base_table)); ?>
</div>

<?php print $tabs; ?>

<div id="views-ajax-form">
  <div id="views-ajax-title">
    <?php // This is initially empty ?>
  </div>
  <div id="views-ajax-pad">
    <?php /* This is sent in because it is also sent out through settings and
    needs to be consistent. */ ?>
    <?php print $message; ?>
  </div>
</div>

<?php print $save_button ?>
