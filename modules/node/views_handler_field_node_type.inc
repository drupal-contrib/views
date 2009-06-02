<?php
// $Id: views_handler_field_node_type.inc,v 1.1.2.1 2009-06-02 23:15:06 merlinofchaos Exp $

/**
 * Field handler to translate a node type into its readable form.
 */
class views_handler_field_node_type extends views_handler_field_node {
  function render($values) {
    $value = node_get_types('name', $values->{$this->field_alias});
    return $this->render_link(t(check_plain($value)), $values);
  }
}

