<?php
// $Id: views_handler_field_last_comment_timestamp.inc,v 1.1.4.2 2010-10-12 23:15:11 merlinofchaos Exp $

class views_handler_field_last_comment_timestamp extends views_handler_field_date {
  function construct() {
    parent::construct();
    $this->additional_fields['comment_count'] = 'comment_count';
  }

  function render($values) {
    if (empty($this->options['empty_zero']) || $values->{$this->aliases['comment_count']}) {
      return parent::render($values);
    }
    else {
      return NULL;
    }
  }
}
