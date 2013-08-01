void function () {
"use strict";

    function initialize() {
        var     $grid   = $('#grid')
            ,   pattern = /^([0-9]*\.?[0-9]+)(\px|\pt|\%|\em)/i
            ,   regex   = new RegExp(pattern);

        // Max width
        $('input[name="max_width"]').keydown(function(event) {
            var     $this   = $(this)
                ,   value   = $this.val()
                ,   result
                ,   ext;

            // up arrow key pressed
            if (event.keyCode == 38) {

                // is the value valid?
                if ( result = value.match(pattern) ) {
                    value   = Number( result[1] );
                    ext     = result[2];

                    // increase the value
                    value++;

                    $this.val(value + ext);
                }

            // down arrow key pressed
            } else if (event.keyCode == 40) {

                // is the value valid?
                if ( result = value.match(pattern) ) {
                    value   = Number( result[1] );
                    ext     = result[2];

                    if(value >= 1) {
                        // decrease the value
                        value--;

                        $this.val(value + ext);
                    }
                }
            }

            value = $this.val();

            // is the value valid?
            if ( result = value.match(pattern) ) {
                value   = Number( result[1] );
                ext     = result[2];

                if ( value >= 0 )
                    $grid.find('.row').css('max-width', value + ext);
            }
        });

        // Gutter
        $('input[name="gutter"]').keydown(function() {
            var     $this   = $(this)
                ,   value   = $this.val()
                ,   result
                ,   ext;

            // up arrow key pressed
            if (event.keyCode == 38) {

                // is the value valid?
                if ( result = value.match(pattern) ) {
                    value   = Number( result[1] );
                    ext     = result[2];

                    // increase the value
                    value++;

                    $this.val(value + ext);
                }

            // down arrow key pressed
            } else if (event.keyCode == 40) {

                // is the value valid?
                if ( result = value.match(pattern) ) {
                    value   = Number( result[1] );
                    ext     = result[2];

                    if(value >= 1) {
                        // decrease the value
                        value--;

                        $this.val(value + ext);
                    }
                }
            }

            value = $this.val();

            // is the value valid?
            if ( result = value.match(pattern) ) {
                value   = (Number( result[1] ) / 2);
                ext     = result[2];

                if ( value >= 0 )
                    $grid.find('.column').css({ 'padding-left': value + ext, 'padding-right': value + ext });
            }
        });

        // Margin
        $('input[name="margin"]').keydown(function() {
            var     $this   = $(this)
                ,   value   = $this.val()
                ,   result
                ,   ext;

            // up arrow key pressed
            if (event.keyCode == 38) {

                // is the value valid?
                if ( result = value.match(pattern) ) {
                    value   = Number( result[1] );
                    ext     = result[2];

                    // increase the value
                    value++;

                    $this.val(value + ext);
                }

            // down arrow key pressed
            } else if (event.keyCode == 40) {

                // is the value valid?
                if ( result = value.match(pattern) ) {
                    value   = Number( result[1] );
                    ext     = result[2];

                    if(value >= 1) {
                        // decrease the value
                        value--;

                        $this.val(value + ext);
                    }
                }
            }

            value = $this.val();

            // is the value valid?
            if ( result = value.match(pattern) ) {
                value   = Number( result[1] );
                ext     = result[2];

                if ( value >= 0 )
                    $grid.find('.container').css({ 'padding-left': value + ext, 'padding-right': value + ext });
            }
        });
    }

    $(initialize);
}();