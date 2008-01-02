<?php
// $Id: views-view-summary.tpl.php,v 1.1 2008-01-02 23:26:34 merlinofchaos Exp $
/**
 * @file views-view-rows.tpl.php
 * Default simple view template to display a list of summary lines
 */
?>
<div class="item-list">
  <ul>
  <?php foreach ($rows as $row): ?>
    <li><?php print $row?></li>
  <?php endforeach; ?>
  </ul>
</div>
