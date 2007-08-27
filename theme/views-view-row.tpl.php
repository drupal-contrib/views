<?php 
// $Id: views-view-row.tpl.php,v 1.1 2007-08-27 19:16:50 merlinofchaos Exp $
/**
 * @file Default simple view template to display a list of rows.
 */
?>
<?php foreach ($fields as $name => $css): ?>
  <div class="$css">
    <?php // this is indirection; $name contains the name of the variable. ?>
    <?php print $$name; ?>
  </div>
<?php endforeach; ?>
