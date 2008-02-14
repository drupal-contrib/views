<?php
// $Id: views-view-fields.tpl.php,v 1.1 2008-02-14 21:59:08 merlinofchaos Exp $
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
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
