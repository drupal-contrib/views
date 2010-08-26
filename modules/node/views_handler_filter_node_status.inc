<?php
// $Id: views_handler_filter_node_status.inc,v 1.2.4.4 2010-08-26 09:41:55 dereine Exp $
/**
 * Filter by published status
 */
class views_handler_filter_node_status extends views_handler_filter {
  function admin_summary() { }
  function operator_form(&$form, &$form_state) { }

  function query() {
    $table = $this->ensure_my_table();
    $this->query->add_where($this->options['group'], "$table.status <> 0 OR ($table.uid = :user-current-user AND :user-current-user <> 0 AND :node-view-own-unpublished-nodes = 1) OR :node-administer-nodes = 1");
  }
}
