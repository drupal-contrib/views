<?php
// $Id: views-ui-edit-item.tpl.php,v 1.4 2008-02-17 17:45:36 merlinofchaos Exp $
/**
 * @file views-ui-edit-item.tpl.php
 *
 * This template handles the printing of fields/filters/sort criteria/arguments or relationships.
 */
?>
<?php print $rearrange; ?>
<?php print $add; ?>
<div class="views-category-title<?php if ($overridden) { print ' overridden'; }?>">
  <?php print $title; ?>
</div>

<?php if (empty($fields)): ?>
  <div><?php print t('None defined'); ?></div>
<?php else: ?>
  <?php foreach ($fields as $field): ?>
    <?php if (!empty($fields['links'])): ?>
      <?php print $field['links']; ?>
    <?php endif; ?>
    <div class="<?php print $field['class']; if (!empty($field['changed'])) { print ' changed'; } ?>">
      <?php print $field['title']; ?>
      <?php print $field['info']; ?>
    </div>
  <?php endforeach; ?>
<?php endif; ?>
