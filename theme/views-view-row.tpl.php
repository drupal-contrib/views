<?php
// $Id: views-view-row.tpl.php,v 1.3 2008-01-03 01:36:12 merlinofchaos Exp $
/**
 * @file views-view-row.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($fields as $name => $css): ?>
  <div class="$css">
    <?php // this is indirection; $name contains the name of the variable. ?>
    <?php print $$name; ?>
  </div>
<?php endforeach; ?>
