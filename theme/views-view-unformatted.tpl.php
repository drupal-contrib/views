<?php
// $Id: views-view-unformatted.tpl.php,v 1.3 2008-06-03 22:21:42 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $row): ?>
  <?php print $row ?>
<?php endforeach; ?>