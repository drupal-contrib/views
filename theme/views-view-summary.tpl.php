<?php
// $Id: views-view-summary.tpl.php,v 1.3 2008-02-14 21:37:14 merlinofchaos Exp $
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
    <li><a href="<?php print $row->url; ?>"><?php print $row->link; ?></a> (<?php print $row->count?>)
  <?php endforeach; ?>
  </ul>
</div>
