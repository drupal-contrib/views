<?php
// $Id: views_plugin_cache_none.inc,v 1.1.2.2 2009-06-02 20:22:24 merlinofchaos Exp $

/**
 * Caching plugin that provides no caching at all.
 */
class views_plugin_cache_none extends views_plugin_cache {
  function summary_title() {
    return t('None');
  }
}
