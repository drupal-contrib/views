<?php
// $Id: views-view-summary.tpl.php,v 1.2 2008-01-03 01:36:12 merlinofchaos Exp $
/**
 * @file views-view-summary.tpl.php
 * Default simple view template to display a list of summary lines
 *
 * @ingroup views_templates
 */
?>
<div class="item-list">
  <ul>
  <?php foreach ($rows as $row): ?>
    <li><?php print $row?></li>
  <?php endforeach; ?>
  </ul>
</div>
