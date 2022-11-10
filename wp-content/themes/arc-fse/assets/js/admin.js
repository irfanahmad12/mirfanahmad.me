"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  $(document).on('click', '.arc-fse-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=arc_fse_hide_theme_info_noticebar&arc-fse-nonce-name=".concat(window.arc_fse.arc_fse_nonce));
    apiFetch({
      url: ajaxurl + "?action=arc_fse_hide_theme_info_noticebar&arc-fse-nonce-name=".concat(window.arc_fse.arc_fse_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});