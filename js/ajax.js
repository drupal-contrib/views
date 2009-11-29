// $Id: ajax.js,v 1.26.4.2 2009-11-29 19:21:59 dereine Exp $
/**
 * @file ajax_admin.js
 *
 * Handles AJAX submission and response in Views UI.
 */
(function ($) {

Drupal.ajax.prototype.commands.viewsSetForm = function(ajax, response, status) {
  var ajax_title = Drupal.settings.views.ajax.title,
    ajax_area = Drupal.settings.views.ajax.id;
  $(ajax_title).html(response.title);
  $(ajax_area).html(response.output);
  Drupal.attachBehaviors($(ajax_area).add($(ajax_title)), ajax.settings);
  if (response.url) {
    var submit = $('input[type=submit]', ajax_area).unbind('click').click(function() {
      $('form', ajax_area).append('<input type="hidden" name="' + $(this).attr('name') + '" value="' + $(this).val() + '">');
      $(this).after('<span class="views-throbbing">&nbsp</span>');
    })
    $('form', ajax_area).once('views-ajax-submit-processed').each(function() {
      var element_settings = { 'url': response.url, 'event': 'submit', 'progress': { 'type': 'throbber' } };
      var form = $(this)[0];
      form.form = form;
      Drupal.ajax[$(this).attr('id')] = new Drupal.ajax($(this).attr('id'), form, element_settings);
    });
  }
};

Drupal.ajax.prototype.commands.viewsDismissForm = function(ajax, response, status) {
  Drupal.ajax.prototype.commands.viewsSetForm({}, {'title': '', 'output': Drupal.settings.views.ajax.defaultForm});
}

Drupal.ajax.prototype.commands.viewsHilite = function(ajax, response, status) {
  $('.hilited').removeClass('hilited');
  $(response.selector).addClass('hilited');
};

Drupal.ajax.prototype.commands.viewsAddTab = function(ajax, response, status) {
  var id = '#views-tab-' + response.id;
  $('#views-tabset').viewsAddTab(id, response.title, 0);
  $(id).html(response.body).addClass('views-tab');
  Drupal.attachBehaviors(id);
  var instance = $.viewsUi.tabs.instances[$('#views-tabset').get(0).UI_TABS_UUID];
  $('#views-tabset').viewsClickTab(instance.$tabs.length);
};

Drupal.ajax.prototype.commands.viewsDisableButtons = function(ajax, response, status) {
  $('#views-ui-edit-view-form input').attr('disabled', 'disabled');
}

Drupal.ajax.prototype.commands.viewsEnableButtons = function(ajax, response, status) {
  $('#views-ui-edit-view-form input').removeAttr('disabled');
}

/**
 * Get rid of irritating tabledrag messages
 */
Drupal.theme.tableDragChangedWarning = function () {
  return ' ';
}

Drupal.behaviors.viewsAjax = {
  attach: function(context) {
    // Bind AJAX behaviors to all items showing the class.
    $('.views-ajax-link', context).once('views-ajax-processed').each(function () {
      var element_settings = { 'event': 'click' };

      // For anchor tags, these will go to the target of the anchor rather
      // than the usual location.
      if ($(this).attr('href')) {
        element_settings.url = $(this).attr('href');
      }
      var base = $(this).attr('id');
      Drupal.ajax[base] = new Drupal.ajax(base, this, element_settings);
    });
  }
};

})(jQuery);
