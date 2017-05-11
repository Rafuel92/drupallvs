/**
 * @file
 * Provides an event handler for hidden elements in dropdown menus.
 */

(function ($, Drupal, Bootstrap) {
    'use strict';

    Drupal.behaviors.themenew = {
        attach: function (context) {
            if($('#views-bootstrap-image-page-1 .img-responsive').size()!=0){
                var topOfDiv = $('#views-bootstrap-image-page-1').offset().top;
                var bottomOfVisibleWindow = $(window).height();
                $('#views-bootstrap-image-page-1 .img-responsive').css('min-height', 600);
                $('#views-bootstrap-image-page-1 .img-responsive').css('max-height', bottomOfVisibleWindow - topOfDiv);
            }
        }
    }

})(jQuery, Drupal, Drupal.bootstrap);
