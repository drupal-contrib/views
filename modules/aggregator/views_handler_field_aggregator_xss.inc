<?php
// $Id: views_handler_field_aggregator_xss.inc,v 1.1 2010-11-05 21:52:36 dereine Exp $
/**
 * @file
 *   Filters htmls tags from item.
 */

class views_handler_field_aggregator_xss extends views_handler_field {
  function render($values) {
    $value = $values->{$this->field_alias};
    return aggregator_filter_xss($value);
  }

}