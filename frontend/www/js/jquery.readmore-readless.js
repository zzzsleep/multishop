(function( $ ){

    var obj = {

        elemIdCounter: 0,

        confData:{

        },

        data: {
            itemClass: 'p, .p',
            itemInSummary: 2,
            containerClass: 'expandable',
            readMoreClass: 'read-more btn',
            readLessClass: 'read-more btn',
            readMoreText: 'Читать далее >>',
            readLessText: 'Свернуть <<'
        },

        init : function( options ) {

            var elemId = obj.elemIdCounter++;
            obj.confData[elemId] = $.extend({},obj.data, options);
//            obj.data = $.extend(obj.data, options);

            return this.each(function(){

                var config =  obj.confData[elemId];
                var expandable = $(this);
                expandable.addClass('rmrl-container').attr('rmrl-elemid', elemId);
                var items = expandable.find(config.itemClass);
                if(items.length > config.itemInSummary){
                    expandable.find(config.itemClass).slice(config.itemInSummary).hide();
                    expandable.append("<span id='rmrl-read' class='rmrl-read-more'> <a href='#' class='"+config.readMoreClass+"'>"+config.readMoreText+"</a> </span>");
                    expandable.append("<span class='rmrl-read-less'> <a href='#' class='"+config.readLessClass+"'>"+config.readLessText+"</a> </span>");
                    expandable.find('.rmrl-read-more').on('click', obj.showDetails);
                    expandable.find('.rmrl-read-less').on('click', obj.hideDetails).hide();
                }

            });
        },

        showDetails: function(e){
            e.preventDefault();
            var expandable= $(this).closest('.rmrl-container');
            var elemId =  expandable.attr('rmrl-elemid');
            var config = obj.confData[elemId];
            expandable.find(config.itemClass).slideDown();
            expandable.find('.rmrl-read-more').hide();
            expandable.find('.rmrl-read-less').show();
        },

        hideDetails: function(e){
            e.preventDefault();
            var expandable= $(this).closest('.rmrl-container');
            var elemId =  expandable.attr('rmrl-elemid');
            var config = obj.confData[elemId];
//            var expandable= $(this).parent('.'+obj.data.containerClass);
            expandable.find(config.itemClass).slice(config.itemInSummary).slideUp();
            expandable.find('.rmrl-read-more').show();
            expandable.find('.rmrl-read-less').hide();
            $('html, body').animate({
                scrollTop: $(".description").offset().top
            });
        }
    };

    $.fn.readMoreReadLess = function( method ) {

        if ( obj[method] ) {
            return obj[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return obj.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.readmore-readless' );
        }
    };

})( jQuery );
