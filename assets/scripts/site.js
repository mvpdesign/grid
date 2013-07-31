void function () {
"use strict";

    function initialize() {
        var     $grid   = $('#grid')
            ,   pattern = /^([0-9]+)(\px|\%|\em)/i
            ,   regex   = new RegExp(pattern);

        $('input[name="max_width"]').keyup(function() {
            var     $this   = $(this)
                ,   value   = $this.val();

            // is the value valid?
            if ( regex.test(value) ) {
                $grid.find('.row').css('max-width', value);
            }
        });

        $('input[name="gutter"]').keyup(function() {
            var     $this   = $(this)
                ,   value   = $this.val()
                ,   result
                ,   ext;

            // is the value valid?
            if ( result = value.match(pattern) ) {
                value   = (parseInt(result[1]) / 2);
                ext     = result[2];

                $grid.find('.columns').css({ 'padding-left': value + ext, 'padding-right': value + ext });
            }
        });

        $('input[name="margin"]').keyup(function() {
            var     $this   = $(this)
                ,   value   = $this.val()
                ,   result
                ,   ext;

            // is the value valid?
            if ( regex.test(value) ) {
                $grid.find('.row').css({ 'padding-left': value, 'padding-right': value });
            }
        });
    }

    $(initialize);
}();