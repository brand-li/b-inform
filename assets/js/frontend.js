jQuery(function () {
    "use strict";


    var elem = jQuery(".wpnotif-countrylist");

    var isShown = 0;
    jQuery(document).on("focus", ".wpnotif_countrycode", function () {
        var $this = jQuery(this).parent().parent();
        var parentForm = $this;
        parentForm.append(elem);

        var nextNode = elem.find('li.selected');
        highlight(nextNode);

        elem.css({'top': $this.outerHeight(false) - 1}).show();

        isShown = 1;
    });

    jQuery(document).on("focusout", ".wpnotif_countrycode", function (e) {
        elem.hide();
        isShown = 0;
    });

    jQuery(document).on("keydown", ".wpnotif_countrycode", function (e) {
        if (isShown == 0) jQuery(this).trigger('focus');
        switch (e.which) {
            case 38: // Up
                var visibles = elem.find('li:not([disabled])');
                var nextNode = elem.find('li.selected').prev();
                var nextIndex = visibles.index(nextNode.length > 0 ? nextNode : visibles.last());
                highlight(nextIndex);
                e.preventDefault();
                return false;
                break;
            case 40:

                var visibles = elem.find('li:not([disabled])');
                var nextNode = elem.find('li.selected').next();

                var nextIndex = visibles.index(nextNode.length > 0 ? nextNode : visibles.first());
                highlight(nextIndex);
                e.preventDefault();
                return false;
                break;
            case 13:
                selectCode();
                return false;
                break;
            case 9:  // Tab
            case 27: //ESC
                elem.hide();
                break;
            default:
                var hiddens = 0;
                var curInput = jQuery(document.activeElement);
                var input = curInput.val().toLowerCase().trim().replace(/[^a-z]+/gi, "");
                elem.find('li').each(function (index) {
                    var attr = jQuery(this).data('country');
                    if (attr.startsWith(input)) {
                        highlight(index);
                        return false;
                    }
                });


                break;
        }


    });


    function selectCode() {

        if (elem.is(':visible')) {
            var selEle = elem.find('li.selected');
            if(!selEle.length){
                selEle = elem.find('li').first();
            }
            var curInput = jQuery(document.activeElement);
            curInput.val("+" + selEle.attr('value'));
            curInput.trigger('keyup');
            elem.hide();
            isShown = 0;
        }
    }

    function highlight(index) {
        setTimeout(function () {
            var visibles = elem.find('li');
            var oldSelected = elem.find('li.selected').removeClass('selected');
            var oldSelectedIndex = visibles.index(oldSelected);
            if (visibles.length > 0) {
                var selectedIndex = (visibles.length + index) % visibles.length;
                var selected = visibles.eq(selectedIndex);
                var top = 0;
                if (selected.length > 0) {
                    top = selected.position().top;
                    selected.addClass('selected');
                }
                if (selectedIndex < oldSelectedIndex && top < 0) {
                    elem.scrollTop(elem.scrollTop() + top);
                }
                if (selectedIndex > oldSelectedIndex && top + selected.outerHeight() > elem.outerHeight()) {
                    elem.scrollTo(".selected");
                }

            }
        });
    }

    elem.on('mousemove', 'li:not([disabled])', function () {

        elem.find('.selected').removeClass('selected');
        jQuery(this).addClass('selected');

    }).on('mousedown', 'li', function (e) {
        if (elem.is('[disabled]')) e.preventDefault();
        else elem.select(jQuery(this));
        selectCode();
    }).on('mouseup', function () {
        elem.find('li.selected').removeClass('selected');
    });

});