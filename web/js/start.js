$(document).on('click', '.faicon', function(e) {
    var config = $(this).attr('data-config');
    var iconClass = $(this).attr('data-icon-class');

    var $configs = $.extend({}, config, {
        fullClassFormatter: function(val) {
            return iconClass + ' ' + val;
        }
    });

    $(this).iconpicker($configs);

    e.stopPropagation();
    e.preventDefault();

    $(this).focusout();
    $(this).focus();
});

