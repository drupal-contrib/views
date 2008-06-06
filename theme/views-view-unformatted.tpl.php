<?php
// $Id: views-view-unformatted.tpl.php,v 1.4 2008-06-06 22:43:08 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $row): ?>
  <?php print $row ?>
<?php endforeach; ?>