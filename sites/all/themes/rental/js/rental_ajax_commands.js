/**
 * @file
 *
 * Implement a Drupal Ajax Commands on product refresh.
 *
 */

(function ($) {
    // Make sure our objects are defined.
    Drupal.Rental = Drupal.Rental || {};

    Drupal.Rental.open_next_question = function(ajax, response, status) {
        debugger;
        var active_element = $('.form-item-rates').show('slow');

        Drupal.attachBehaviors(active_element);
    }

    $(function() {
        Drupal.ajax.prototype.commands.open_next_question = Drupal.Rental.open_next_question;
    });

})(jQuery);
