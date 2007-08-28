<?php 
// $Id: views-view-row.tpl.php,v 1.2 2007-08-28 00:57:09 merlinofchaos Exp $
/**
 * @file views-view-row.tpl.php
 * Default simple view template to display a list of rows.
 */
?>
<?php foreach ($fields as $name => $css): ?>
  <div class="$css">
    <?php // this is indirection; $name contains the name of the variable. ?>
    <?php print $$name; ?>
  </div>
<?php endforeach; ?>
