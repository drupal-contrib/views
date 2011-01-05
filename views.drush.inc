<?php
// $Id: views.drush.inc,v 1.1.2.1 2011-01-05 00:07:43 dereine Exp $

/**
 * @file
 * Drush integration of views.
 */

/**
 * Adds a cache clear option for views.
 */
function views_drush_cache_clear(&$types) {
  $types['views'] = 'views_invalidate_cache';
}