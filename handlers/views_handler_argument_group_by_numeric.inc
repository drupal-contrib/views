<?php
// $Id: views_handler_argument_group_by_numeric.inc,v 1.1.2.1 2009-11-10 23:23:27 merlinofchaos Exp $

/**
 * @defgroup views_argument_handlers Handlers for arguments
 * @{
 */

/**
 * Simple handler for arguments using group by.
 */
class views_handler_argument extends views_handler {
  function query($group_by = FALSE) {
    $this->ensure_my_table();
    $placeholder = empty($this->definition['numeric']) ? "'%s'" : '%d';
    $field = $this->get_field();

    $this->query->add_having(0, "$field = $placeholder", $this->argument);
  }

  function ui_name() {
    return $this->get_field(parent::ui_name());
  }
}
