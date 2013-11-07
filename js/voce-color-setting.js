jQuery(document).ready(function($) {
    var colorOptions = {
        change: function(event, ui) {
            $(event.target).val(ui.color._color);
        }
    };
    $('.vs-color-picker').wpColorPicker(colorOptions);
});