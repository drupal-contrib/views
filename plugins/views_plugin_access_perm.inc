<?php
// $Id: views_plugin_access_perm.inc,v 1.3.6.1 2009-11-02 22:01:27 merlinofchaos Exp $

/**
 * Access plugin that provides permission-based access control.
 */
class views_plugin_access_perm extends views_plugin_access {
  function access($account) {
    return user_access($this->options['perm'], $account);
  }

  function get_access_callback() {
    return array('user_access', array($this->options['perm']));
  }

  function summary_title() {
    return t($this->options['perm']);
  }

  function option_defaults(&$options) {
    $options['perm'] = 'access content';
  }

  function options_form(&$form, &$form_state) {
    $perms = array();
    // Get list of permissions
    foreach (module_implements('permission') as $module) {
      $permissions = module_invoke($module, 'permission');
      foreach ($permissions as $name => $perm) {
        $perms[$module][$name] = $perm['title'];
      }
    }
    $form['perm'] = array(
      '#type' => 'select',
      '#options' => $perms,
      '#title' => t('Permission'),
      '#default_value' => $this->options['perm'],
      '#description' => t('Only users with the selected permission flag will be able to access this display. Note that users with "access all views" can see any view, regardless of other permissions.'),
    );
  }
}
