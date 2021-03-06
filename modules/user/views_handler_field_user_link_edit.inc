<?php
// $Id: views_handler_field_user_link_edit.inc,v 1.1 2008-09-03 19:21:30 merlinofchaos Exp $
/**
 * Field handler to present a link to user edit.
 */
class views_handler_field_user_link_edit extends views_handler_field_user_link {
  // An example of field level access control.
  function access() {
    return user_access('administer users');
  }

  function render($values) {
    $text = !empty($this->options['text']) ? $this->options['text'] : t('edit');
    $uid = $values->{$this->aliases['uid']};
    return l($text, "user/$uid/edit", array('query' => drupal_get_destination()));
  }
}

